<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Class'), ['action' => 'edit', $class->CLASS_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Class'), ['action' => 'delete', $class->CLASS_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $class->CLASS_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Class'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="classes view large-9 medium-8 columns content">
    <h3><?= h($class->CLASS_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CLASS NAME') ?></th>
            <td><?= h($class->CLASS_NAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CLASS ID') ?></th>
            <td><?= $this->Number->format($class->CLASS_ID) ?></td>
        </tr>
    </table>
</div>
