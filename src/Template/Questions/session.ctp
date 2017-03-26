<?php
/**
  * @var \App\View\AppView $this
  */
?>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 550px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Liste des questions pour la session <?= h($sessionId); ?></h4>
                            </div>
                            <table class="mdl-data-table mdl-js-data-table extended-table">
                                <thead>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('id') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('text') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('isOpenQuestion') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('sessionId') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric actions" style="text-align:right;"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($questions as $question): ?>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($question->id) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($question->text) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($question->isOpenQuestion) ?></td> 
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($question->sessionId) ?></td> 
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
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="height : 35px; margin-top:-20px;">
                            <a href="/questions/add" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                            style="background-color: #00c96f; color : #ffffff;  height:50px; ">
                                    <span style="margin-top:20px">Ajouter une question</span>
                                </a>
                        </div>
                    </div>
                </div>

          
