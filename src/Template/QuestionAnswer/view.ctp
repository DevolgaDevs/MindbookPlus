<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Question Answer'), ['action' => 'edit', $questionAnswer->QUESTION_ANSWER_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Question Answer'), ['action' => 'delete', $questionAnswer->QUESTION_ANSWER_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $questionAnswer->QUESTION_ANSWER_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Question Answer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Question Answer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="questionAnswer view large-9 medium-8 columns content">
    <h3><?= h($questionAnswer->QUESTION_ANSWER_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('QUESTION ANSWER ID') ?></th>
            <td><?= $this->Number->format($questionAnswer->QUESTION_ANSWER_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QUESTION ANSWER QUESTION ID') ?></th>
            <td><?= $this->Number->format($questionAnswer->QUESTION_ANSWER_QUESTION_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QUESTION ANSWER ANSWER ID') ?></th>
            <td><?= $this->Number->format($questionAnswer->QUESTION_ANSWER_ANSWER_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('QUESTION ANSWER IS RIGHT ANSWER') ?></th>
            <td><?= $questionAnswer->QUESTION_ANSWER_IS_RIGHT_ANSWER ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
