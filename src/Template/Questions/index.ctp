<?php
/**
  * @var \App\View\AppView $this
  */
?>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card " style="overflow-y : auto; height : 550px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Liste des questions</h4>
                            </div>
                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp extended-table">
                                <thead>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('id') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('text') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('isOpenQuestion') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric actions" style="text-align:right;"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($questions as $question): ?>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($question->id) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($question->text) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($question->isOpenQuestion) ?></td> 
                                        <td class="actions" style="text-align:right;">
                                            <?= $this->Html->link(__('View'), ['action' => 'view', $question->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $question->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $question->id], ['confirm' => __('Are you sure you want to delete # {0}?', $question->id)]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 55px; margin-top:-20px">
                            <div class="mdl-card__actions mdl-card--border">
                                <div class="paginator" style="text-align:center">
                                    <?= $this->Paginator->first('<< ' . __('Début')) ?>
                                    <?= $this->Paginator->prev('< ' . __('Page précédente')) ?>
                                    <?= $this->Paginator->numbers() ?>
                                    <?= $this->Paginator->next(__('Page suivante') . ' >') ?>
                                    <?= $this->Paginator->last(__('Fin') . ' >>') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
