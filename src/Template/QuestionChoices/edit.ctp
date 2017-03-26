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
            echo $this->Form->control('questionId', array('type'=>'select','options'=>$questions, 'class' => 'mdl-selectfield__select'));
            echo $this->Form->control('answerId', array('type'=>'select','options'=>$answers, 'class' => 'mdl-selectfield__select'));
            echo $this->Form->control('userId', array('type'=>'select','options'=>$users, 'class' => 'mdl-selectfield__select'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
