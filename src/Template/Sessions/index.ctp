<?php
/**
  * @var \App\View\AppView $this
  */
?>
                <?php if (!empty($nextSession)) : ?> 
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="demo-card-event mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand blue-card-color">
                                <h4>
                                    <?= h($nextSession['name']) ?><br> <?= h($nextSession['date']) ?>
                                </h4>
                                <div class="last-note-header live-color"> LIVE</div>
                            </div>
                            <div class="mdl-card__actions mdl-card--border blue-card-color">
                                <a class="button-link mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="/sessions/live/<?php $nextSession['id'] ?>?s=<?= $this->request->session()->read('Auth.User.id') ?>">
                                    Rejoindre la session
                                </a>
                                <div class="mdl-layout-spacer "></div>
                                <i class="material-icons">cast_connected</i>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 450px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Liste des sessions</h4>
                            </div>
                            <table class="mdl-data-table mdl-js-data-table extended-table">
                                <thead>
                                    <tr>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('id') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('userId') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('classId') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('name') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('date') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('hasQuestions') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric actions" style="text-align:right;"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sessions as $session) : ?>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($session->id) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($session->userId) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($session->classId) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($session->name) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($session->date) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($session->hasQuestions) ?></td>
                                        <td class="actions" style="text-align:right;">
                                            <?= $this->Html->link('En savoir plus', ['action' => 'view', $session->id], ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect', 'style' => 'color : #5C6BC0; margin-right: -16px;']) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <?php if ($this->request->session()->read('Auth.User.isTeacher')) : ?>
                    <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                            <div class="mdl-card session-list-card mdl-shadow--2dp" style="height : 35px; margin-top:-20px;">
                                <a href="/sessions/add" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                                style="background-color: #00c96f; color : #ffffff;  height:50px; ">
                                        <span style="margin-top:20px">Ajouter une session</span>
                                    </a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
               
           