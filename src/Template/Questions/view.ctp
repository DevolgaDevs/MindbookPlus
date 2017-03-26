<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card " style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Informations sur une question</h4>
                            </div>
                            <hr>
                            <h3 style="margin-left:30px;">Question : <?= h($question->text) ?></h3>
                            <h6 style="margin-left:30px;"><b>ID Question : </b><?= $this->Number->format($question->id) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Type "Question ouverte" : </b><?= $question->isOpenQuestion ? __('Yes') : __('No'); ?></h6><br />
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            <div style="align : center; margin-left:30px;"><a href="/questions/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #3d91ff; color : #ffffff;">
                                    < Retour à la liste
                                </a> <a href="/questions/edit/<?= $this->Number->format($question->id) ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #00c96f; color : #ffffff;">
                                    Editer cette session
                                </a> </div>
                        </div>
                    </div>
                </div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->QUESTION_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->QUESTION_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $question->QUESTION_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
