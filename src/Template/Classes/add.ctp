<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Classes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="classes form large-9 medium-8 columns content">
    <?= $this->Form->create($class) ?>
    <fieldset>
        <legend><?= __('Add Class') ?></legend>
        <?php
            echo $this->Form->control('CLASS_NAME');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
