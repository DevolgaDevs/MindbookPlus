<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Classee'), ['action' => 'edit', $classee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Classee'), ['action' => 'delete', $classee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Classees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classee'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="classees view large-9 medium-8 columns content">
    <h3><?= h($classee->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($classee->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($classee->id) ?></td>
        </tr>
    </table>
</div>
