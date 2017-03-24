<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question Answer'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionAnswers index large-9 medium-8 columns content">
    <h3><?= __('Question Answers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('QUESTION_ANSWER_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QUESTION_ANSWER_QUESTION_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QUESTION_ANSWER_ANSWER_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QUESTION_ANSWER_IS_RIGHT_ANSWER') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questionAnswers as $questionAnswer): ?>
            <tr>
                <td><?= $this->Number->format($questionAnswer->QUESTION_ANSWER_ID) ?></td>
                <td><?= $this->Number->format($questionAnswer->QUESTION_ANSWER_QUESTION_ID) ?></td>
                <td><?= $this->Number->format($questionAnswer->QUESTION_ANSWER_ANSWER_ID) ?></td>
                <td><?= h($questionAnswer->QUESTION_ANSWER_IS_RIGHT_ANSWER) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questionAnswer->QUESTION_ANSWER_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionAnswer->QUESTION_ANSWER_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionAnswer->QUESTION_ANSWER_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $questionAnswer->QUESTION_ANSWER_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
