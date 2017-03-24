<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="user form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->control('USER_MAIL');
            echo $this->Form->control('USER_FIRSTNAME');
            echo $this->Form->control('USER_LASTNAME');
            echo $this->Form->control('USER_PASSWORD');
            echo $this->Form->control('USER_IS_ADMIN');
            echo $this->Form->control('USER_IS_TEACHER');
            echo $this->Form->control('USER_CLASS_ID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
