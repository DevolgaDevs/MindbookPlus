<?php
/**
  * @var \App\View\AppView $this
  */
?>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card " style="overflow-y : auto; height : 550px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Liste des utilisateurs</h4>
                            </div>
                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp extended-table">
                                <thead>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('id') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('username') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('firstname') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('lastname') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('isAdmin') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('isTeacher') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('classId') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric actions" style="text-align:right;"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($user->id) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($user->username) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($user->firstname) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($user->lastname) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($user->isAdmin) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($user->isTeacher) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($user->classId) ?></td>
                                        <td class="actions" style="text-align:right;">
                                            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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