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
                ['action' => 'delete', $questionChoice->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $questionChoice->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Question Choices'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questionChoices form large-9 medium-8 columns content">
    <?= $this->Form->create($questionChoice) ?>
    <fieldset>
        <legend><?= __('Edit Question Choice') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('questionId');
            echo $this->Form->control('answerId');
            echo $this->Form->control('userId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
