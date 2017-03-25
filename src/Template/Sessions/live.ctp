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
        if (c.checked) {
            d.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            e.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            return true;
        } else { 
            d.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            e.setAttribute("class", "mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ");
            return false;
        }
    }
    </script>

<span style="position : absolute; right: 50px; top:17px;">
    <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="isResizeMode">
    <input type="checkbox" id="isResizeMode" class="mdl-switch__input" onClick="validateTerms()">
    <span class="mdl-switch__label"><b>Mode redimmensionnement</b></span>
    </label>
</span>

<div class="mdl-grid" style="margin-top : 40px;">
    <div id="videoleft" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ">
        <div class="video-prof-card mdl-card mdl-shadow--2dp " >
            <video src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B14F_FSUCc01SWc0N29QR3pZT2s/MaterialMotionHero_Spec_0505.mp4" controls /> 
        </div>
    </div>
    <div id="videoright"class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se ">
        <div class="video-prof-card mdl-card mdl-shadow--2dp ">
            <video src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B14F_FSUCc01SWc0N29QR3pZT2s/MaterialMotionHero_Spec_0505.mp4" controls />
        </div>
    </div>
</div>
<div class="mdl-grid draggable">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content ">
        <div class="qcm-card mdl-card mdl-shadow--2dp">
            #commentaires
        </div>
    </div>
</div>
<div class="mdl-grid draggable">
    <div id="qcm" class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content ">
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