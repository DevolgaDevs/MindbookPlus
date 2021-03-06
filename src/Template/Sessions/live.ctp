<script>
        $(function() {
            $(".draggable").draggable();
        });
    </script>
    <script>
        $( function() {
            $( ".resizable" ).resizable();
        } );
    </script>
    <script>

    var totalQuestions = 0;
    var qEnCours = 1;

    var isWebcamShowed = true;
    var isScreensharingShowed = true;
    var isQcmShowed = true;
    var isCommentShowed = true;

    var mode = true;

    var videoleft_left = $("#videoleft").css("left");
    var videoleft_top = $("#videoleft").css("top");
    var videoleft_width = $(".videogauche").css("width");
    var videoleft_height = $(".videogauche").css("height");

    var videoright_left = $("#videoleft").css("left");
    var videoright_top = $("#videoleft").css("top");
    var videoright_width = $(".videogauche").css("width");
    var videoright_height = $(".videogauche").css("height");

    var qcm_left = $("#qcmviewleft").css("left");
    var qcm_top = $("#qcmviewleft").css("top");
    var qcm_width = $("#qcmviewwidth").css("width");
    var qcm_height = $("#qcmviewwidth").css("height");

    var comment_left = $("#commentviewleft").css("left");
    var comment_top = $("#commentviewleft").css("top");
    var comment_width = $("#commentviewwidth").css("width");
    var comment_height = $("#commentviewwidth").css("height");

    function showwebcam(){
        if(isWebcamShowed == true)
        {
            var d=document.getElementById('videoleft');
            d.setAttribute("class", "hide");
            isWebcamShowed = false;
        }
        else
        {
            var d=document.getElementById('videoleft');
            d.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se show");
            isWebcamShowed = true;
        }
    }   

    function showsharing(){
        if(isScreensharingShowed == true)
        {
            var d=document.getElementById('videoright');
            d.setAttribute("class", "hide");
            isScreensharingShowed = false;
        }
        else
        {
            var d=document.getElementById('videoright');
            d.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se show");
            isScreensharingShowed = true;
        }
    }

    function showqcm(){
        if(isQcmShowed == true)
        {
            var d=document.getElementById('qcm');
            d.setAttribute("class", "hide");
            isQcmShowed = false;
        }
        else
        {
            var d=document.getElementById('qcm');
            d.setAttribute("class", "mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content show");
            isQcmShowed = true;
        }
    }

    function showcomment(){
        if(isCommentShowed == true)
        {
            var d=document.getElementById('comment');
            d.setAttribute("class", "hide");
            isCommentShowed = false;
        }
        else
        {
            var d=document.getElementById('comment');
            d.setAttribute("class", "mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content show");
            isCommentShowed = true;
        }
    }

    function modewindow(){

        var c=document.getElementById('isResizeMode');
        var d=document.getElementById('videoleft');
        var e=document.getElementById('videoright');
        var f=document.getElementById('qcm');
        var g=document.getElementById('comment');

        if (mode == true) {

            d.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            e.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            f.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            g.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            
            var notification = document.querySelector('.mdl-js-snackbar');
            notification.MaterialSnackbar.showSnackbar(
            {
                message: 'Mode resize'
            }
            );

            mode = false;

        } else { 

            d.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            e.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            f.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            g.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            
            var notification = document.querySelector('.mdl-js-snackbar');
            notification.MaterialSnackbar.showSnackbar(
            {
                message: 'Mode draggable'
            }
            );

            mode = true;

        }
    }

    function reinit(){
        
        var d=document.getElementById('videoleft');
        var e=document.getElementById('videoright');
        var h=document.getElementById('videogauche');
        var i=document.getElementById('videodroite');
        var fa=document.getElementById('qcmviewleft');
        var fb=document.getElementById('qcmviewwidth');
        var ga=document.getElementById('commentviewleft');
        var gb=document.getElementById('commentviewwidth');

        d.style.left = videoleft_left;
        d.style.top = videoleft_top;
        h.style.width = videoleft_width;
        h.style.height = videoleft_height;

        e.style.left = videoright_left;
        e.style.top = videoright_top;
        i.style.width = videoright_width;
        i.style.height = videoright_height;

        fa.style.left = qcm_left;
        fa.style.top = qcm_top;
        fb.style.width = qcm_width;
        fb.style.height = qcm_height;

        ga.style.left = comment_left;
        ga.style.top = comment_top;
        gb.style.width = comment_width;
        gb.style.height = comment_height;

    }   

    function getNameAnswers(id, array)
    {
        console.log(id);
        
        for(i = 0; i < array.length; i++){
            if (array[i]['id'] == id)
            {
                return array[i]['text'];
            }
        } 
    }

    </script>


        <script src="/js/firebase.js"> </script>
        <script src="/js/RTCPeerConnection-v1.5.js"> </script> 
        <script src="/js/broadcast.js"> </script>
        <script src="/js/DetectRTC.js"></script>
        <script src="https://cdn.webrtc-experiment.com/RTCMultiConnection.js"> </script>
        <script src="https://cdn.webrtc-experiment.com/RTCMultiConnection/CodecsHandler.js"></script>
        <script src="https://cdn.webrtc-experiment.com/view/websocket.js"> </script>

<span style="position : absolute; left: 20px; top:-8px; color:#3a3a3a"><h6><b><?= h($session->name) ?></b></h6></span>

<span style="position : absolute; right: 20px; top:3px;">
    <div id="viewWebcam" class=" mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect tools-round-img-topbar " onclick="showwebcam();" style="border-radius:25%;"><i class="material-icons">switch_video</i></div>
    <div id="viewScreenSharing" class=" mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect tools-round-img-topbar" onclick="showsharing();"style="border-radius:25%;"><i class="material-icons">screen_share</i></div>
    <div id="viewQcm" class=" mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect tools-round-img-topbar " onclick="showqcm();"style="border-radius:25%;"><i class="material-icons">format_list_bulleted</i></div>
    <div id="viewComment" class=" mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect tools-round-img-topbar " onclick="showcomment();"style="border-radius:25%;"><i class="material-icons">message</i></div>
    <div id="mode" class=" mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect tools-round-img-topbar " onclick="modewindow();"style="border-radius:25%;"><i class="material-icons">border_outer</i></div>
    <div id="reinit" class=" mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect tools-round-img-topbar " onclick="reinit();"style="border-radius:25%;"><i class="material-icons">refresh</i></div>
</span>

<div id="demo-toast-example" class="mdl-js-snackbar mdl-snackbar">
  <div class="mdl-snackbar__text"></div>
  <button class="mdl-snackbar__action" type="button"></button>
</div>

<div class="mdl-grid" style="margin-top : 40px;">
    <div id="videoleft" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ">
        <div id="videogauche" class="video-prof-card  mdl-card mdl-shadow--2dp " >
            <?php if ($this->request->session()->read('Auth.User.isTeacher')) : ?>
                <a style="margin-top:160px; height : 80px; font-size: 25px; color:#A2A2A2;"id="setup-new-broadcast" onclick="setupNewBroadcastButtonClickHandler();" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect comment-btn-send">
                    Démarrer votre webcam
                </a>
            <?php endif; ?>

                <table style="width: 100%;" id="rooms-list"></table>
                <div id="videos-container" style="width:100%; height:100%;"></div>
            </section>
        </div>
    </div>
    <div id="videoright" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ">
        <div id="videodroite" class="video-prof-card videodroite mdl-card mdl-shadow--2dp ">
            <div id="container" style="width:100%; height:100%;">
                <div id="card">
                    <div id="remote" >
                        <video id="remoteVideo" autoplay="autoplay"></video>
                    </div>
                </div>
                <div id="info-bar"></div>
                </div>
            </div>
        </div>
    </div>
<div id="qcmviewleft"class="mdl-grid draggable">
    <div id="qcm" class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content ">
        <div id="qcmviewwidth" class="qcm-card mdl-card mdl-shadow--2dp" style="overflow-x:hidden; overflow-y:auto">
            <span style="margin-top :10px;right:92px; position:absolute; ">
                <div id="precedent" class=" mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect tools-round-img-topbar " onclick="precedent();" style="background-color:#2196F3;line-height:3em;border-radius:25%;width:50% !important;height:50% !important"><<</div>
            </span>
            <span style="margin-top :9px;right:40px; position:absolute;" >
                <div id="precedent" class=" mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect tools-round-img-topbar " onclick="valider();" style="background-color:#2196F3;line-height:3em;border-radius:25%;"><i class="material-icons">done</i></div>
            </span>
            <span style="margin-top :10px;right:10px; position:absolute; " >
                <div id="precedent" class=" mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect tools-round-img-topbar " onclick="suivant();" style="background-color:#2196F3;line-height:3em;border-radius:25%;width:50% !important;height:50% !important">>></div>
            </span>

            <?php $checkbox=0; ?>
            
            

             <?php foreach ($questions as $question) : ?>

                 <span style="margin-left:25px;"><h6>Question n°<?= $this->Number->format($question->id) ?> : <?= h($question->text)?></h6></span>
             
                     <?php foreach ($questionAnswers as $questionAnswer) : ?>
                 
                         <?php if($questionAnswer['questionId'] == $question['id']) : ?>
                     
                            <?php foreach($answers as $answer) : ?>

                                <span style="margin-left:25px;">
                                <?php $checkbox = $checkbox + 1; ?>
                                
                                <?php if($answer['id'] == $questionAnswer['answerId']) : ?>
                                    
                                    <?php echo '<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox'.$checkbox.'">'; ?>
                                    <?php echo '<input type="checkbox" id="checkbox-'.$checkbox.'" class="mdl-checkbox__input">' ?>
                                    <?php echo '<span class="mdl-checkbox__label">'.h($answer->text).'</span>'; ?>
                                
                                <?php endif ?>

                                </span>

                            <?php endforeach; ?>

                         <?php endif; ?>
                     
                     <?php endforeach; ?>

            <?php endforeach ?>

            </span>
        </div>
    </div>
</div>
<div id="commentviewleft" class="mdl-grid draggable">
    <div id="comment" class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content ">
        <div id="commentviewwidth" class="comment-card mdl-card mdl-shadow--2dp">

        <div class="listchat" style="width:100%; ">
            <?php
            // Connexion à la base de données
            try
            {
                $bdd = new PDO('mysql:host=malv.fr;dbname=mindbook;charset=utf8', 'mindbook', 'iG61HKJ7NzpDHBMY');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }

            // Récupération des 10 derniers messages
            $reponse = $bdd->query('SELECT userid, message FROM chat ORDER BY id DESC');

            // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
            while ($donnees = $reponse->fetch())
            {
                echo '<p><strong>' . htmlspecialchars($donnees[0]) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
            }

            $reponse->closeCursor();

            ?>
        </div>
            <form action="chat_post.php" method="post">
                <input type="hidden" name="id" id="userId" value="<?= $this->request->session()->read('Auth.User.id') ?>"/><br />
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input comment-textfield" type="text" id="chatmessage">
                    <label class="mdl-textfield__label" for="chatmessage">Écrire un commentaire...</label>
                </div>
                <input id="envoyermessage" type="button" value="Envoyer" class="mdl-button" style="width:100%; background-color :#2196F3; color:white;" />
            </form>

            
        </div>
    </div>
</div>

    <script>
                var config = {
                    openSocket: function(config) {
                        var channel = config.channel || location.href.replace( /\/|:|#|%|\.|\[|\]/g , '');
                        var socket = new Firebase('https://webrtc.firebaseIO.com/' + channel);
                        socket.channel = channel;
                        socket.on("child_added", function(data) {
                            config.onmessage && config.onmessage(data.val());
                        });
                        socket.send = function(data) {
                            this.push(data);
                        };
                        config.onopen && setTimeout(config.onopen, 1);
                        socket.onDisconnect().remove();
                        return socket;
                    },
                    onRemoteStream: function(htmlElement) {
                        htmlElement.setAttribute('controls', true);
                        videosContainer.insertBefore(htmlElement, videosContainer.firstChild);
                        htmlElement.play();
                    },
                    onRoomFound: function(room) {
                        var alreadyExist = document.querySelector('button[data-broadcaster="' + room.broadcaster + '"]');
                        if (alreadyExist) return;

                        if (typeof roomsList === 'undefined') roomsList = document.body;

                        var tr = document.createElement('tr');
                        tr.innerHTML = '<td><button class="join" id="join">Rejoindre</button></td>';
                        roomsList.insertBefore(tr, roomsList.firstChild);


                        document.getElementById('setup-new-broadcast').hidden = true;
                        var joinRoomButton = tr.querySelector('.join');
                        joinRoomButton.setAttribute('data-broadcaster', room.broadcaster);
                        joinRoomButton.setAttribute('data-roomToken', room.broadcaster);
                        joinRoomButton.onclick = function() {
                            this.disabled = true;
                            
                            var elem = document.getElementById('join');
                            elem.parentNode.removeChild(elem);

                            var elemtr = document.getElementById('rooms-list');
                            elemtr.parentNode.removeChild(elemtr);

                            var broadcaster = this.getAttribute('data-broadcaster');
                            var roomToken = this.getAttribute('data-roomToken');
                            broadcastUI.joinRoom({
                                roomToken: roomToken,
                                joinUser: broadcaster
                            });
                        };
                    },
                    onNewParticipant: function(numberOfViewers) {
                        document.title = 'Viewers: ' + numberOfViewers;
                    }
                };

                function setupNewBroadcastButtonClickHandler() {
                    document.getElementById('setup-new-broadcast').hidden = true;

                    captureUserMedia(function() {
                        var shared = 'video';
                        
                        broadcastUI.createRoom({
                            isAudio: shared === 'audio'
                        });
                    });
                }

                function captureUserMedia(callback) {
                    videosContainer = document.getElementById('videos-container');
                    var constraints = null;
                    window.option = broadcastingOption ? broadcastingOption.value : '';
                    

                    if (option != 'Only Audio' && option != 'Screen' && DetectRTC.hasWebcam !== true) {
                        alert('DetectRTC library is unable to find webcam; maybe you denied webcam access once and it is still denied or maybe webcam device is not attached to your system or another app is using same webcam.');
                    }

                    var htmlElement = document.createElement(option === 'Only Audio' ? 'audio' : 'video');
                    htmlElement.setAttribute('autoplay', true);
                    htmlElement.setAttribute('controls', true);
                    videosContainer.insertBefore(htmlElement, videosContainer.firstChild);

                    var mediaConfig = {
                        video: htmlElement,
                        onsuccess: function(stream) {
                            config.attachStream = stream;
                            callback && callback();

                            htmlElement.setAttribute('muted', true);
                            rotateInCircle(htmlElement);
                        },
                        onerror: function() {
                            if (option === 'Only Audio') alert('unable to get access to your microphone');
                            else if (option === 'Screen') {
                                if (location.protocol === 'http:') alert('Please test this WebRTC experiment on HTTPS.');
                                else alert('Screen capturing is either denied or not supported. Are you enabled flag: "Enable screen capture support in getUserMedia"?');
                            } else alert('unable to get access to your webcam');
                        }
                    };
                    if (constraints) mediaConfig.constraints = constraints;
                    getUserMedia(mediaConfig);
                }

                var broadcastUI = broadcast(config);

                /* UI specific */
                var videosContainer = document.getElementById('videos-container') || document.body;
                var setupNewBroadcast = document.getElementById('setup-new-broadcast');
                var roomsList = document.getElementById('rooms-list');

                var broadcastingOption = 'Audio + Video';

                if (setupNewBroadcast) setupNewBroadcast.onclick = setupNewBroadcastButtonClickHandler;

            </script>




<script>
(function() {
    var params = {},
        r = /([^&=]+)=?([^&]*)/g;

    function d(s) {
        return decodeURIComponent(s.replace(/\+/g, ' '));
    }

    var match, search = window.location.search;
    while (match = r.exec(search.substring(1)))
        params[d(match[1])] = d(match[2]);

    window.params = params;
})();

function setBandwidth(connection) {
    connection.bandwidth = {};
    connection.bandwidth.video = connection.bandwidth.screen = 512;
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

var connection = new RTCMultiConnection(params.s);

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
</script>

<script>
//récupération de l'élément remoteVideo'
var remoteVideo = document.getElementById('remoteVideo');
var card = document.getElementById('card');
var containerDiv;

if (navigator.mozGetUserMedia) {
    attachMediaStream = function(element, stream) {
        console.log("Attaching media stream");
        element.mozSrcObject = stream;
        element.play();
    };
    reattachMediaStream = function(to, from) {
        console.log("Reattaching media stream");
        to.mozSrcObject = from.mozSrcObject;
        to.play();
    };
} else if (navigator.webkitGetUserMedia) {
    attachMediaStream = function(element, stream) {
        if (typeof element.srcObject !== 'undefined') {
            element.srcObject = stream;
        } else if (typeof element.mozSrcObject !== 'undefined') {
            element.mozSrcObject = stream;
        } else if (typeof element.src !== 'undefined') {
            element.src = URL.createObjectURL(stream);
        } else {
            console.log('Error attaching stream to element.');
        }
    };
    reattachMediaStream = function(to, from) {
        to.src = from.src;
    };
} else {
    //Le navigateur ne supporte pas WEBRTC
    console.log("Browser does not appear to be WebRTC-capable");
}

var infoBar = document.getElementById('info-bar');

//gestion des réponses serveurs
connection.onstatechange = function(state) {
    infoBar.innerHTML = state.name + ': ' + state.reason;

    if(state.name == 'request-rejected' && params.p) {
        infoBar.innerHTML = 'Mot de passe incorrect. Veuillez vérifier la saisie.';
    }

    if(state.name === 'room-not-available') {
        infoBar.innerHTML = 'ScreenSharing non détecté.';
    }

    if(state.name === 'detecting-room-presence')
    {
        infoBar.innerHTML = 'Tentative de réception...';
    }

    if(state.name === 'connecting-with-initiator')
    {
        infoBar.innerHTML = 'Tentative de réception...';
    }
    console.log(state.name);
    
};

//réception du document
connection.onstreamid = function(event) {
    infoBar.innerHTML = 'Réception...';
};

connection.onstream = function(e) {
    if (e.type == 'remote') {
        infoBar.style.display = 'none';
        remoteStream = e.stream;
        attachMediaStream(remoteVideo, e.stream);
        waitForRemoteVideo();
        remoteVideo.setAttribute('data-id', e.userid);

        websocket.send('received-your-screen');
    }
};
// si l'utilisateur quitte
connection.onleave = function(e) {
    transitionToWaiting();
    connection.onSessionClosed();
};

//Session terminée
connection.onSessionClosed = function() {
    infoBar.innerHTML = 'Accès bloqué au document.';
    infoBar.style.display = 'block';
    connection.close();
    websocket.onopen();

    remoteVideo.pause();
};

connection.ondisconnected = connection.onSessionClosed;
connection.onstreamended = connection.onSessionClosed;

//attente de la vidéo
function waitForRemoteVideo() {
    var videoTracks = remoteStream.getVideoTracks();
    if (videoTracks.length === 0 || remoteVideo.currentTime > 0) {
        transitionToActive();
    } else {
        setTimeout(waitForRemoteVideo, 100);
    }
}

function transitionToActive() {
    remoteVideo.style.opacity = 1;
    card.style.webkitTransform = 'rotateY(180deg)';
    window.onresize();
}

function transitionToWaiting() {
        card.style.webkitTransform = 'rotateY(0deg)';
        remoteVideo.style.opacity = 0;
    }
window.onresize = function() {
    var aspectRatio;
    if (remoteVideo.style.opacity === '1') {
        aspectRatio = remoteVideo.videoWidth / remoteVideo.videoHeight;
    } else {
        return;
    }
    var innerHeight = this.innerHeight;
    var innerWidth = this.innerWidth;
    var videoWidth = innerWidth < aspectRatio * window.innerHeight ?
        innerWidth : aspectRatio * window.innerHeight;
    var videoHeight = innerHeight < window.innerWidth / aspectRatio ?
        innerHeight : window.innerWidth / aspectRatio;
    containerDiv = document.getElementById('container');

};

function enterFullScreen() {
    container.webkitRequestFullScreen();
}
</script>

<script>
var onMessageCallbacks = {};
var pub = 'pub-c-3c0fc243-9892-4858-aa38-1445e58b4ecb';
var sub = 'sub-c-d0c386c6-7263-11e2-8b02-12313f022c90';

WebSocket = PUBNUB.ws;
var websocket = new WebSocket('wss://pubsub.pubnub.com/' + pub + '/' + sub + '/' + connection.channel);

websocket.onmessage = function(e) {
    data = JSON.parse(e.data);

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
    if(connection.numberOfConnectedUsers <= 0) {
        location.reload();
    }
};

websocket.onclose = function() {
    if(connection.numberOfConnectedUsers <= 0) {
        location.reload();
    }
};

infoBar.innerHTML = 'Connexion au serveur WebSocket...';

websocket.onopen = function() {
    infoBar.innerHTML = 'Connexion établie au serveur WebSocket.';

    var sessionDescription = {
        userid: params.s,
        extra: {},
        session: {
            video: true,
            oneway: true
        },
        sessionid: params.s
    };

    if (params.s) {
        infoBar.innerHTML = 'Accès à la session...';

        if(params.p) {
            //Password protected room.
            connection.extra.password = params.p;
        }

        connection.join(sessionDescription);
    }
};

window.addEventListener('offline', function() {
    infoBar.innerHTML = 'Vous êtes hors-ligne.';
}, false);

window.addEventListener('online', function() {
    infoBar.innerHTML = 'Rechargement de la page...';
    location.reload();
}, false);
</script>

<script>
    videoleft_left = $("#videoleft").css("left");
    videoleft_top = $("#videoleft").css("top");
    videoleft_width = $("#videogauche").css("width");
    videoleft_height = $("#videogauche").css("height");

    videoright_left = $("#videoright").css("left");
    videoright_top = $("#videoright").css("top");
    videoright_width = $("#videodroite").css("width");
    videoright_height = $("#videodroite").css("height");

    qcm_left = $("#qcmviewleft").css("left");
    qcm_top = $("#qcmviewleft").css("top");
    qcm_width = $("#qcm").css("width");
    qcm_height = $("#qcm").css("height");

    comment_left = $("#comment").css("left");
    comment_top = $("#comment").css("top");
    comment_width = $("#comment").css("width");
    comment_height = $("#comment").css("height");

    </script>