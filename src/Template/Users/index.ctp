<?php
/**
  * @var \App\View\AppView $this
  */
?>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Liste des utilisateurs</h4>
                            </div>
                            <table class="mdl-data-table mdl-js-data-table extended-table">
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
                                            <?= $this->Html->link('En savoir plus',['action' => 'view', $user->id], ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect', 'style' => 'color : #5C6BC0; margin-right: -16px;']) ?>
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
                            <a href="/users/add" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                            style="background-color: #00c96f; color : #ffffff;  height:50px; ">
                                    <span style="margin-top:20px">Ajouter un utilisateur</span>
                                </a>
                        </div>
                    </div>
                </div>
               