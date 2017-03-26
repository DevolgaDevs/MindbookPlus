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
        function validateTerms(){
        var c=document.getElementById('isResizeMode');
        var d=document.getElementById('videoleft');
        var e=document.getElementById('videoright');
        var f=document.getElementById('qcm');
        var g=document.getElementById('comment');
        if (c.checked) {
            d.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            e.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            f.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            g.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            return true;
        } else { 
            d.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            e.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            f.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            g.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            return false;
        }
    }
    //Stream Webcam
    </script>
        <script src="/js/firebase.js"> </script>
        <script src="/js/RTCPeerConnection-v1.5.js"> </script> 
        <script src="/js/broadcast.js"> </script>
        <script src="/js/DetectRTC.js"></script>
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

<span style="position : absolute; right: 50px; top:17px;">
    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="isResizeMode">
    <input type="checkbox" id="isResizeMode" class="mdl-switch__input" onClick="validateTerms()">
    <span class="mdl-switch__label"><b>Mode redimmensionnement</b></span>
    </label>
</span>

<div class="mdl-grid" style="margin-top : 40px;">
    <div id="videoleft" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ">
        <div id="rooms-list" class="video-prof-card mdl-card mdl-shadow--2dp " >
                <a id="setup-new-broadcast" onclick="setupNewBroadcastButtonClickHandler();" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect comment-btn-send">
                    Démarrer votre webcam
                </a>

                <table style="width: 100%;" id="rooms-list"></table>

                <div id="videos-container" style="width:100%; height:100%"></div>
            </section>
        </div>
    </div>
    <div id="videoright" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ">
        <div class="video-prof-card mdl-card mdl-shadow--2dp ">
            <video src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B14F_FSUCc01SWc0N29QR3pZT2s/MaterialMotionHero_Spec_0505.mp4" controls />
        </div>
    </div>
</div>
<div class="mdl-grid draggable">
    <div id="qcm" class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content ">
        <div class="qcm-card mdl-card mdl-shadow--2dp">
            #commentaires
        </div>
    </div>
</div>
<div class="mdl-grid draggable">
    <div id="comment" class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content ">
        <div class="comment-card mdl-card mdl-shadow--2dp">
            #commentaires
        </div>
        <div class="write-card mdl-card mdl-shadow--2dp">
            <form action="#">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input comment-textfield" type="text" id="sample3">
                    <label class="mdl-textfield__label" for="sample3">Écrire un commentaire...</label>
                </div>
            </form>
            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect comment-btn-send">
                    Envoyer
            </a>
        </div>
    </div>
</div>

