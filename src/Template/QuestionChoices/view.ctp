<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question Choice'), ['action' => 'edit', $questionChoice->QUESTION_CHOICE_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question Choice'), ['action' => 'delete', $questionChoice->QUESTION_CHOICE_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $questionChoice->QUESTION_CHOICE_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Question Choices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question Choice'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionChoices view large-9 medium-8 columns content">
    <h3><?= h($questionChoice->QUESTION_CHOICE_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($questionChoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QuestionId') ?></th>
            <td><?= $this->Number->format($questionChoice->questionId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AnswerId') ?></th>
            <td><?= $this->Number->format($questionChoice->answerId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('UserId') ?></th>
            <td><?= $this->Number->format($questionChoice->userId) ?></td>
        </tr>
    </table>
</div>
