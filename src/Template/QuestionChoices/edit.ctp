<?php
/**
  * @var \App\View\AppView $this
  */
?>
<<<<<<< HEAD
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $questionChoice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $questionChoice->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Question Choices'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questionChoices form large-9 medium-8 columns content">
    <?= $this->Form->create($questionChoice) ?>
    <fieldset>
        <legend><?= __('Edit Question Choice') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('questionId', array('type'=>'select','options'=>$questions, 'class' => 'mdl-selectfield__select'));
            echo $this->Form->control('answerId', array('type'=>'select','options'=>$answers, 'class' => 'mdl-selectfield__select'));
            echo $this->Form->control('userId', array('type'=>'select','options'=>$users, 'class' => 'mdl-selectfield__select'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
=======
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 650px;">
            <div class="mdl-card__actions mdl-card--border">
                <h4 class="profil-list-titre">Ajouter une question à un QCM</h4>
            </div>
            <?= $this->Form->create($questionChoice) ?>
            <fieldset style="padding :30px;">
                <?php
                    echo $this->Form->control('id');
                    echo '<br />';
                    echo $this->Form->control('questionId', array('type'=>'select','options'=>$questions, 'class' => 'mdl-selectfield__select'));
                    echo '<br />';
                    echo '<br />';
                    echo $this->Form->control('answerId', array('type'=>'select','options'=>$answers, 'class' => 'mdl-selectfield__select'));
                    echo '<br />';
                    echo '<br />';
                    echo $this->Form->control('userId', array('type'=>'select','options'=>$users, 'class' => 'mdl-selectfield__select'));
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
>>>>>>> origin/master
</div>
