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
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('questionId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('answerId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isRightAnswer') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($questionAnswers as $questionAnswer): ?>
            <tr>
                <td><?= $this->Number->format($questionAnswer->id) ?></td>
                <td><?= $this->Number->format($questionAnswer->questionId) ?></td>
                <td><?= $this->Number->format($questionAnswer->answerId) ?></td>
                <td><?= h($questionAnswer->isRightAnswer) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $questionAnswer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $questionAnswer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $questionAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $questionAnswer->id)]) ?>
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
