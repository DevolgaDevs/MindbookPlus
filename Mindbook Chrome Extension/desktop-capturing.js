

chrome.browserAction.onClicked.addListener(captureDesktop);

window.addEventListener('offline', function() {
    if (!connection || !connection.attachStreams.length) return;

    setDefaults();
    chrome.runtime.reload();
}, false);

window.addEventListener('online', function() {
    if (!connection) return;

    setDefaults();
    chrome.runtime.reload();
}, false);

function captureDesktop() {
    if (connection && connection.attachStreams[0]) {
        setDefaults();
        connection.attachStreams[0].stop();
        return;
    }

    chrome.browserAction.setTitle({
        title: 'Capturing Desktop'
    });

    chrome.storage.sync.get(null, function(items) {
        if (items['is_audio'] && items['is_audio'] === 'true' && chromeVersion >= 50) {
            isAudio = true;
        }

        var sources = ['window', 'screen'];
        if (chromeVersion >= 50) {
            if (isAudio) {
                sources = ['tab', 'audio'];
            } else {
                sources = ['tab'].concat(sources);
            }
        }

        var desktop_id = chrome.desktopCapture.chooseDesktopMedia(sources, onAccessApproved);
    });
}

var constraints;
var min_bandwidth = 512;
var max_bandwidth = 1048;
var room_password = '';
var room_id = '338877';
var isAudio = false;

function onAccessApproved(chromeMediaSourceId) {
    if (!chromeMediaSourceId) {
        setDefaults();
        chrome.windows.create({
            url: "data:text/html,<h1>L'utilisateur ne peut pas partager son écran.</h1>",
            type: 'popup',
            width: screen.width / 2,
            height: 170
        });
        return;
    }

    chrome.storage.sync.get(null, function(items) {
        var resolutions = {};

        if (items['min_bandwidth']) {
            min_bandwidth = parseInt(items['min_bandwidth']);
        }

        if (items['max_bandwidth']) {
            max_bandwidth = parseInt(items['max_bandwidth']);
        }

        if (items['room_password']) {
            room_password = items['room_password'];
        }

        if (items['room_id']) {
            room_id = items['room_id'];
        }

        var _resolutions = items['resolutions'];
        if (!_resolutions) {
            resolutions = {
                maxWidth: screen.width > 1920 ? screen.width : 1920,
                maxHeight: screen.height > 1080 ? screen.height : 1080
            }

            chrome.storage.sync.set({
                resolutions: '1080p'
            }, function() {});
        }

        if (_resolutions === 'fit-screen') {
            resolutions.maxWidth = screen.width;
            resolutions.maxHeight = screen.height;
        }

        if (_resolutions === '1080p') {
            resolutions.maxWidth = 1920;
            resolutions.maxHeight = 1080;
        }

        if (_resolutions === '720p') {
            resolutions.maxWidth = 1280;
            resolutions.maxHeight = 720;
        }

        if (_resolutions === '360p') {
            resolutions.maxWidth = 640;
            resolutions.maxHeight = 360;
        }

        constraints = {
            audio: false,
            video: {
                mandatory: {
                    chromeMediaSource: 'desktop',
                    chromeMediaSourceId: chromeMediaSourceId,
                    maxWidth: resolutions.maxWidth,
                    maxHeight: resolutions.maxHeight,
                    minFrameRate: 30,
                    maxFrameRate: 64,
                    minAspectRatio: 1.77
                },
                optional: [{
                    bandwidth: resolutions.maxWidth * 8 * 1024
                }]
            }
        };

        if (isAudio && chromeVersion >= 50) {
            constraints.audio = {
                mandatory: {
                    chromeMediaSource: 'desktop',
                    chromeMediaSourceId: chromeMediaSourceId,
                },
                optional: [{
                    bandwidth: resolutions.maxWidth * 8 * 1024
                }]
            };
        }

        navigator.webkitGetUserMedia(constraints, gotStream, getUserMediaError);
    });

    function gotStream(stream) {
        if (!stream) {
            setDefaults();
            chrome.windows.create({
                url: "data:text/html,<h1>Erreur interne lors de la capture de l'écran.</h1>",
                type: 'popup',
                width: screen.width / 2,
                height: 170
            });
            return;
        }

        chrome.browserAction.setTitle({
            title: 'Connexion au serveur WebSocket.'
        });

        chrome.browserAction.disable();

        stream.onended = function() {
            setDefaults();
            chrome.runtime.reload();
        };

        stream.getVideoTracks()[0].onended = stream.onended;
        if (stream.getAudioTracks().length) {
            stream.getAudioTracks()[0].onended = stream.onended;
        }

        function isMediaStreamActive() {
            if ('active' in stream) {
                if (!stream.active) {
                    return false;
                }
            } else if ('ended' in stream) {
                if (stream.ended) {
                    return false;
                }
            }
            return true;
        }

        (function looper() {
            if (isMediaStreamActive() === false) {
                stream.onended();
                return;
            }

            setTimeout(looper, 1000);
        })();

        chrome.windows.create({
            url: chrome.extension.getURL('_generated_background_page.html'),
            type: 'popup',
            focused: false,
            width: 1,
            height: 1,
            top: parseInt(screen.height),
            left: parseInt(screen.width)
        }, function(win) {
            var background_page_id = win.id;

            setTimeout(function() {
                chrome.windows.remove(background_page_id);
            }, 3000);
        });

        setupRTCMultiConnection(stream);

        chrome.browserAction.setIcon({
            path: 'images/pause22.png'
        });
    }

    function getUserMediaError(e) {
        setDefaults();
        chrome.windows.create({
            url: "data:text/html,<h1>getUserMediaError: " + JSON.stringify(e, null, '<br>') + "</h1><br>Contraintes utilisées:<br><pre>" + JSON.stringify(constraints, null, '<br>') + '</pre>',
            type: 'popup',
            width: screen.width / 2,
            height: 170
        });
    }
}

// RTCMultiConnection - www.RTCMultiConnection.org
var connection;
var popup_id;

function setBadgeText(text) {
    chrome.browserAction.setBadgeBackgroundColor({
        color: [255, 0, 0, 255]
    });

    chrome.browserAction.setBadgeText({
        text: text + ''
    });

    chrome.browserAction.setTitle({
        title: text + ' utilisateurs regardent le stream.'
    });
}

function setupRTCMultiConnection(stream) {
    if (!stream.getAudioTracks().length) {
        isAudio = false;
    }

    connection = new RTCMultiConnection();

    connection.optionalArgument = {
        optional: [{
            DtlsSrtpKeyAgreement: true
        }, {
            googImprovedWifiBwe: true
        }, {
            googScreencastMinBitrate: 300 * 8 * 1024
        }, {
            googIPv6: true
        }, {
            googDscp: true
        }, {
            googCpuUnderuseThreshold: 55
        }, {
            googCpuOveruseThreshold: 85
        }, {
            googSuspendBelowMinBitrate: true
        }, {
            googCpuOveruseDetection: true
        }],
        mandatory: {}
    };

    connection.channel = connection.sessionid = connection.userid;

    if (room_id && room_id.length) {
        connection.channel = connection.sessionid = connection.userid = room_id;
    }

    connection.autoReDialOnFailure = true;
    connection.getExternalIceServers = false;

    connection.iceServers.push({
        urls: 'turn:webrtcweb.com:443',
        username: 'muazkh',
        credential: 'muazkh'
    });

    connection.iceServers.push({
        urls: 'turn:webrtcweb.com:80',
        username: 'muazkh',
        credential: 'muazkh'
    });

    setBandwidth(connection);

    connection.session = {
        audio: !!isAudio && chromeVersion >= 50,
        video: true,
        oneway: true
    };

    connection.sdpConstraints.mandatory = {
        OfferToReceiveAudio: true,
        OfferToReceiveVideo: true
    };

    connection.onstream = connection.onstreamended = function(event) {
        try {
            event.mediaElement.pause();
            delete event.mediaElement;
        } catch (e) {}
    };

    connection.dontCaptureUserMedia = true;

    connection.attachStreams.push(stream);

    if (room_password && room_password.length) {
        connection.onRequest = function(request) {
            if (request.extra.password !== room_password) {
                connection.reject(request);
                chrome.windows.create({
                    url: "data:text/html,<h1>Un utilisateur a essayé de joindre votre stream avec un mot de passe incorrect. Sa requête a été refusée. Mot de passe entré : " + request.extra.password + " </h2>",
                    type: 'popup',
                    width: screen.width / 2,
                    height: 170
                });
                return;
            }

            connection.accept(request);
        };
    }

    var onMessageCallbacks = {};
    var pub = 'pub-c-3c0fc243-9892-4858-aa38-1445e58b4ecb';
    var sub = 'sub-c-d0c386c6-7263-11e2-8b02-12313f022c90';

    WebSocket = PUBNUB.ws;
    var websocket = new WebSocket('wss://pubsub.pubnub.com/' + pub + '/' + sub + '/' + connection.channel);

    var text = '-';
    (function looper() {
        if (!connection) {
            setBadgeText('');
            return;
        }

        if (connection.isInitiator) {
            setBadgeText('0');
            return;
        }

        text += ' -';
        if (text.length > 6) {
            text = '-';
        }

        setBadgeText(text);
        setTimeout(looper, 500);
    })();

    var connectedUsers = 0;
    connection.ondisconnected = function() {
        connectedUsers--;
        setBadgeText(connectedUsers);
    };

    websocket.onmessage = function(e) {
        data = JSON.parse(e.data);

        if (data === 'received-your-screen') {
            connectedUsers++;
            setBadgeText(connectedUsers);
        }

        if (data.sender == connection.userid) return;

        if (onMessageCallbacks[data.channel]) {
            onMessageCallbacks[data.channel](data.message);
        };
    };

    websocket.push = websocket.send;
    websocket.send = function(data) {
        data.sender = connection.userid;
        websocket.push(JSON.stringify(data));
    };

    connection.openSignalingChannel = function(config) {
        var channel = config.channel || this.channel;
        onMessageCallbacks[channel] = config.onmessage;

        if (config.onopen) setTimeout(config.onopen, 1000);

        return {
            send: function(message) {
                websocket.send({
                    sender: connection.userid,
                    channel: channel,
                    message: message
                });
            },
            channel: channel
        };
    };

    websocket.onerror = function() {
        if (!!connection && connection.attachStreams.length) {
            chrome.windows.create({
                url: "data:text/html,<h1>Erreur de connexion au serveur WebSocket. Veuillez réessayer.</h1>",
                type: 'popup',
                width: screen.width / 2,
                height: 170
            });
        }

        setDefaults();
        chrome.runtime.reload();
    };

    websocket.onclose = function() {
        if (!!connection && connection.attachStreams.length) {
            chrome.windows.create({
                url: "data:text/html,<p style='font-size:25px;'><span style='color:red;'><span>Impossible de joindre le serveur WebSocket</span>. WebSockets is nécessaire.<br><br>Veuillez <span style='color:green;'>cliquer sur l'icone</span> une nouvelle pour réessayer.</p>",
                type: 'popup',
                width: screen.width / 2,
                height: 200
            });
        }

        setDefaults();
        chrome.runtime.reload();
    };

    websocket.onopen = function() {
        chrome.browserAction.enable();

        setBadgeText(0);

        console.info('WebSockets connection is opened.');

        var sessionDescription = connection.open({
            dontTransmit: true
        });

        var resultingURL = 'https://malv.fr/uniview/index.html';

        if (room_password && room_password.length) {
            resultingURL += '&p=' + room_password;
        }

        var popup_width = 600;
        var popup_height = 170;

        chrome.windows.create({
            url: "data:text/html,<title>Document prêt à être envoyé</title><h1 style='text-align:center'>Veuillez partager cette URL:</h1><input type='text' value='" + resultingURL + "' style='text-align:center;width:100%;font-size:1.2em;'>",
            type: 'popup',
            width: popup_width,
            height: popup_height,
            top: parseInt((screen.height / 2) - (popup_height / 2)),
            left: parseInt((screen.width / 2) - (popup_width / 2)),
            focused: true
        }, function(win) {
            popup_id = win.id;
        });
    };
}

function setDefaults() {
    if (connection) {
        connection.close();
        connection.attachStreams = [];
    }

    chrome.browserAction.setIcon({
        path: 'images/desktopCapture22.png'
    });

    if (popup_id) {
        try {
            chrome.windows.remove(popup_id);
        } catch (e) {}

        popup_id = null;
    }

    chrome.browserAction.setTitle({
        title: 'Share Desktop'
    });

    chrome.browserAction.setBadgeText({
        text: ''
    });
}

function setBandwidth(connection) {
    connection.bandwidth = {};
    connection.bandwidth.video = connection.bandwidth.screen = max_bandwidth;
    connection.bandwidth.audio = 128;

    connection.processSdp = function(sdp) {
        if (DetectRTC.isMobileDevice || DetectRTC.browser.name === 'Firefox') {
            return sdp;
        }

        sdp = CodecsHandler.setApplicationSpecificBandwidth(sdp, connection.bandwidth, !!connection.session.screen);
        sdp = CodecsHandler.setVideoBitrates(sdp, {
            min: connection.bandwidth.video * 8 * 1024,
            max: connection.bandwidth.video * 8 * 1024
        });
        sdp = CodecsHandler.setOpusAttributes(sdp, {
            maxaveragebitrate: connection.bandwidth.audio * 8 * 1024,
            maxplaybackrate: connection.bandwidth.audio * 8 * 1024,
            stereo: 1,
            maxptime: 3
        });
        sdp = CodecsHandler.preferVP9(sdp);
        return sdp;
    };
}

var chromeVersion = 49;
var matchArray = navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./);
if (matchArray && matchArray[2]) {
    chromeVersion = parseInt(matchArray[2], 10);
}

// Check whether new version is installed
chrome.runtime.onInstalled.addListener(function(details) {
    if (details.reason == 'install') {
        chrome.tabs.create({
            url: 'chrome://extensions/?options=' + chrome.runtime.id
        });
    }
});
