<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Clas'), ['action' => 'edit', $clas->CLASS_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Clas'), ['action' => 'delete', $clas->CLASS_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $clas->CLASS_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Class'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Clas'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="class view large-9 medium-8 columns content">
    <h3><?= h($clas->CLASS_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CLASS NAME') ?></th>
            <td><?= h($clas->CLASS_NAME) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CLASS ID') ?></th>
            <td><?= $this->Number->format($clas->CLASS_ID) ?></td>
        </tr>
    </table>
</div>
