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
                ['action' => 'delete', $question->QUESTION_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $question->QUESTION_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Question'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="question form large-9 medium-8 columns content">
    <?= $this->Form->create($question) ?>
    <fieldset>
        <legend><?= __('Edit Question') ?></legend>
        <?php
            echo $this->Form->control('QUESTION_TEXT');
            echo $this->Form->control('QUESTION_OPEN_QUESTION');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
