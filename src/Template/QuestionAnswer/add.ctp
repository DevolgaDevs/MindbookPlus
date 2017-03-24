<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Question Answer'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questionAnswer form large-9 medium-8 columns content">
    <?= $this->Form->create($questionAnswer) ?>
    <fieldset>
        <legend><?= __('Add Question Answer') ?></legend>
        <?php
            echo $this->Form->control('QUESTION_ANSWER_QUESTION_ID');
            echo $this->Form->control('QUESTION_ANSWER_ANSWER_ID');
            echo $this->Form->control('QUESTION_ANSWER_IS_RIGHT_ANSWER');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
