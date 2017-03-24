<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question'), ['action' => 'edit', $question->QUESTION_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question'), ['action' => 'delete', $question->QUESTION_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $question->QUESTION_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Questions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questions view large-9 medium-8 columns content">
    <h3><?= h($question->QUESTION_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('QUESTION ID') ?></th>
            <td><?= $this->Number->format($question->QUESTION_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QUESTION OPEN QUESTION') ?></th>
            <td><?= $question->QUESTION_OPEN_QUESTION ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('QUESTION TEXT') ?></h4>
        <?= $this->Text->autoParagraph(h($question->QUESTION_TEXT)); ?>
    </div>
</div>