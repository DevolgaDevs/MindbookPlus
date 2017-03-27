<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 650px;">
            <div class="mdl-card__actions mdl-card--border">
                <h4 class="profil-list-titre">Ajouter une choix à un QCM</h4>
            </div>
            <?= $this->Form->create($questionChoice) ?>
            <fieldset style="padding :30px;">
                <?php
                    echo $this->Form->control('id', array('class' => 'mdl-textfield__input'));
                    echo '<br />';
                    echo $this->Form->control('questionId', array('label'=>'Question','type'=>'select','options'=>$questions, 'class' => 'mdl-selectfield__select'));
                    echo '<br />';
                    echo '<br />';
                    echo $this->Form->control('answerId', array('label'=>'Réponse','type'=>'select','options'=>$answers, 'class' => 'mdl-selectfield__select'));
                    echo '<br />';
                    echo '<br />';
                    echo $this->Form->control('userId', array('label'=>'Utilisateur','type'=>'select','options'=>$users, 'class' => 'mdl-selectfield__select'));
                    echo '<br />';
                    echo '<br />';
                ?>
            </fieldset>
            
            <span style="padding :30px;">
                <button class="mdl-button" 
                type="submit" name="submit" style="width : 200px" 
                data-upgraded=",MaterialButton">Valider
                </button>
                <?= $this->Form->end() ?>
            </span>
        </div>
    </div>
</div>