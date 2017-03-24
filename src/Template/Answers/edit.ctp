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
                ['action' => 'delete', $answer->ANSWER_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $answer->ANSWER_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Answers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="answers form large-9 medium-8 columns content">
    <?= $this->Form->create($answer) ?>
    <fieldset>
        <legend><?= __('Edit Answer') ?></legend>
        <?php
            echo $this->Form->control('ANSWER_TEXT');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
