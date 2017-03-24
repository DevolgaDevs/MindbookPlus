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
                ['action' => 'delete', $session->SESSION_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $session->SESSION_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sessions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="sessions form large-9 medium-8 columns content">
    <?= $this->Form->create($session) ?>
    <fieldset>
        <legend><?= __('Edit Session') ?></legend>
        <?php
            echo $this->Form->control('SESSION_NAME');
            echo $this->Form->control('SESSION_USER_ID');
            echo $this->Form->control('SESSION_DATE', ['empty' => true]);
            echo $this->Form->control('SESSION_HAS_QUESTIONS');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
