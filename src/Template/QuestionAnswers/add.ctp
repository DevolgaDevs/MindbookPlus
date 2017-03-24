<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Question Answers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="questionAnswers form large-9 medium-8 columns content">
    <?= $this->Form->create($questionAnswer) ?>
    <fieldset>
        <legend><?= __('Add Question Answer') ?></legend>
        <?php
            echo $this->Form->control('id');
            echo $this->Form->control('questionId');
            echo $this->Form->control('answerId');
            echo $this->Form->control('isRightAnswer');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
