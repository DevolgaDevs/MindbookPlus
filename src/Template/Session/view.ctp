<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Session'), ['action' => 'edit', $session->SESSION_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Session'), ['action' => 'delete', $session->SESSION_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $session->SESSION_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Session'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Session'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="session view large-9 medium-8 columns content">
    <h3><?= h($session->SESSION_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('SESSION ID') ?></th>
            <td><?= $this->Number->format($session->SESSION_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SESSION USER ID') ?></th>
            <td><?= $this->Number->format($session->SESSION_USER_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SESSION DATE') ?></th>
            <td><?= h($session->SESSION_DATE) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('SESSION HAS QUESTIONS') ?></th>
            <td><?= $session->SESSION_HAS_QUESTIONS ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('SESSION NAME') ?></h4>
        <?= $this->Text->autoParagraph(h($session->SESSION_NAME)); ?>
    </div>
</div>
