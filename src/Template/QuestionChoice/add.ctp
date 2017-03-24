<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Question Choice'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questionChoice form large-9 medium-8 columns content">
    <?= $this->Form->create($questionChoice) ?>
    <fieldset>
        <legend><?= __('Add Question Choice') ?></legend>
        <?php
            echo $this->Form->control('QUESTION_CHOICE_QUESTION_ID');
            echo $this->Form->control('QUESTION_CHOICE_ANSWER_ID');
            echo $this->Form->control('QUESTION_CHOICE_USER_ID');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
