<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
                    mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row topnav">
                <div class="mdl-button-custom-top-profile mdl-js-button mdl-button--fab-custom-top-profile mdl-js-ripple-effect user-round-img-topbar " id="btn-menu-profile"></div>
                <div class="profile-top-name">Gabe NEWELL</div>
                <div class="mdl-layout-spacer"></div>

                <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon" style="background-color : #353942;color:white;">
                    <i class="material-icons">more_vert</i>
                </button>

                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                    <li class="mdl-menu__item">Se déconnecter</li>
                </ul>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <div class="mdl-layout-title logotext">min<span class="logotext-color">db</span>ook</div>
            <nav class="mdl-navigation">
                <a style="margin-top:40px" class="mdl-navigation__link" href="/dashboard"><i class="material-icons">dashboard</i> Tableau de bord</a>
                <a class="mdl-navigation__link" href="/profil"><i class="material-icons">account_box</i> Profil</a>
                <a class="mdl-navigation__link" href="/sessions/etudiant"><i class="material-icons">visibility</i> Accès aux sessions</a>
                <a class="mdl-navigation__link" href="/sessions/prof"><i class="material-icons">event_note</i> Gestion des sessions</a>
                <a class="mdl-navigation__link" href="/users"><i class="material-icons">fingerprint</i> Gestion des utilisateurs</a>
                <a class="mdl-navigation__link" href="/results"><i class="material-icons">assessment</i> Résultats</a>
                <a class="mdl-navigation__link" href="/info"><i class="material-icons">info_outline</i> Informations</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 550px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Liste des sessions</h4>
                            </div>
                            <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp extended-table">
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
            </div>
        </main>
    </div>
