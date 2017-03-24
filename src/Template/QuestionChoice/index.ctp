<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Question Choice'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="questionChoice index large-9 medium-8 columns content">
    <h3><?= __('Question Choice') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('QUESTION_CHOICE_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QUESTION_CHOICE_QUESTION_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QUESTION_CHOICE_ANSWER_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('QUESTION_CHOICE_USER_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questionChoice as $questionChoice): ?>
            <tr>
                <td><?= $this->Number->format($questionChoice->QUESTION_CHOICE_ID) ?></td>
                <td><?= $this->Number->format($questionChoice->QUESTION_CHOICE_QUESTION_ID) ?></td>
                <td><?= $this->Number->format($questionChoice->QUESTION_CHOICE_ANSWER_ID) ?></td>
                <td><?= $this->Number->format($questionChoice->QUESTION_CHOICE_USER_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questionChoice->QUESTION_CHOICE_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionChoice->QUESTION_CHOICE_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionChoice->QUESTION_CHOICE_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $questionChoice->QUESTION_CHOICE_ID)]) ?>
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
