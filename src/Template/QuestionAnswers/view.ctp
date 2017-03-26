<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question Answer'), ['action' => 'edit', $questionAnswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question Answer'), ['action' => 'delete', $questionAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionAnswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Question Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question Answer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionAnswers view large-9 medium-8 columns content">
    <h3><?= h($questionAnswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionAnswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QuestionId') ?></th>
            <td><?= $this->Number->format($questionAnswer->questionId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AnswerId') ?></th>
            <td><?= $this->Number->format($questionAnswer->answerId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('IsRightAnswer') ?></th>
            <td><?= $questionAnswer->isRightAnswer ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
