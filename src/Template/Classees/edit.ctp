<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $classee->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $classee->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Classees'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="classees form large-9 medium-8 columns content">
    <?= $this->Form->create($classee) ?>
    <fieldset>
        <legend><?= __('Edit Classee') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
