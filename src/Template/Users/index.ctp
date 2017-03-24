<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('USER_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('USER_MAIL') ?></th>
                <th scope="col"><?= $this->Paginator->sort('USER_FIRSTNAME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('USER_LASTNAME') ?></th>
                <th scope="col"><?= $this->Paginator->sort('USER_PASSWORD') ?></th>
                <th scope="col"><?= $this->Paginator->sort('USER_IS_ADMIN') ?></th>
                <th scope="col"><?= $this->Paginator->sort('USER_IS_TEACHER') ?></th>
                <th scope="col"><?= $this->Paginator->sort('USER_CLASS_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->USER_ID) ?></td>
                <td><?= h($user->USER_MAIL) ?></td>
                <td><?= h($user->USER_FIRSTNAME) ?></td>
                <td><?= h($user->USER_LASTNAME) ?></td>
                <td><?= h($user->USER_PASSWORD) ?></td>
                <td><?= h($user->USER_IS_ADMIN) ?></td>
                <td><?= h($user->USER_IS_TEACHER) ?></td>
                <td><?= $this->Number->format($user->USER_CLASS_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->USER_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->USER_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->USER_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->USER_ID)]) ?>
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