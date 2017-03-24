<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->USER_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->USER_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->USER_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="user view large-9 medium-8 columns content">
    <h3><?= h($user->USER_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('USER MAIL') ?></th>
            <td><?= h($user->USER_MAIL) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('USER FIRSTNAME') ?></th>
            <td><?= h($user->USER_FIRSTNAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('USER LASTNAME') ?></th>
            <td><?= h($user->USER_LASTNAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('USER PASSWORD') ?></th>
            <td><?= h($user->USER_PASSWORD) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('USER ID') ?></th>
            <td><?= $this->Number->format($user->USER_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('USER CLASS ID') ?></th>
            <td><?= $this->Number->format($user->USER_CLASS_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('USER IS ADMIN') ?></th>
            <td><?= $user->USER_IS_ADMIN ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('USER IS TEACHER') ?></th>
            <td><?= $user->USER_IS_TEACHER ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
