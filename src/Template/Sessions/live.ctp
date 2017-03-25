<script>
        $(function() {
            $(".draggable").draggable();
        });
    </script>
    <script>
        $(function() {
            var dialog = document.querySelector('dialog');
            //dialog.showModal();
        });
    </script>
    <script>
        $( function() {
            $( ".resizable" ).resizable();
            $(".resizable").find("div.ui-resizable-se").removeClass("ui-icon");
            $(".resizable").find("div.ui-resizable-se").removeClass("ui-icon-gripsmall-diagonal-se");
        } );
    </script>

<div class="mdl-grid">
    <div style="background-color:white;" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable">
        <div class="video-prof-card mdl-card mdl-shadow--2dp ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 1000;" >
            <!--<video src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B14F_FSUCc01SWc0N29QR3pZT2s/MaterialMotionHero_Spec_0505.mp4" controls /> -->
        </div>
    </div>
    <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content draggable ui-resizable">
        <div class="video-prof-card mdl-card mdl-shadow--2dp">
            <!--<video src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0B14F_FSUCc01SWc0N29QR3pZT2s/MaterialMotionHero_Spec_0505.mp4" controls /> -->
        </div>
    </div>
</div>
<div class="mdl-grid draggable">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content ">
        <div class="comment-card mdl-card mdl-shadow--2dp">
            #commentaires
        </div>
    </div>
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone ui-widget-content ">
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