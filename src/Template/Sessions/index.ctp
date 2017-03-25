<?php
/**
  * @var \App\View\AppView $this
  */
?>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                        <div class="demo-card-event mdl-card mdl-shadow--2dp">
                            <div class="mdl-card__title mdl-card--expand blue-card-color">
                                <h4>
                                    Architecture SI<br> 24 mai 2017<br> 8h30 - 11h30
                                </h4>
                                <div class="last-note-header live-color"> LIVE</div>
                            </div>
                            <div class="mdl-card__actions mdl-card--border blue-card-color">
                                <a class="button-link mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="view_session.html">
                                    Rejoindre la session
                                </a>
                                <div class="mdl-layout-spacer "></div>
                                <i class="material-icons">cast_connected</i>
                            </div>
                        </div>
                    </div>
                </div>
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
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('name') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('date') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('hasQuestions') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric actions" style="text-align:right;"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($sessions as $session): ?>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($session->id) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($session->userId) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($session->name) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($session->date) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($session->hasQuestions) ?></td>
                                        <td class="actions" style="text-align:right;">
                                            <?= $this->Html->link(__('View'), ['action' => 'view', $session->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $session->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $session->id], ['confirm' => __('Are you sure you want to delete # {0}?', $session->id)]) ?>
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
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 55px; margin-top:-31px">
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
           