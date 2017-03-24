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
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Ajouter un utilisateur</h4>
                            </div>
                            <?= $this->Form->create($user) ?>
                            <fieldset style="padding :30px;">
                                <?php
                                    echo $this->Form->control('username', array('class' => 'mdl-textfield__input'));
                                    echo '<br />';
                                    echo $this->Form->control('firstname', array('class' => 'mdl-textfield__input'));
                                    echo '<br />';
                                    echo $this->Form->control('lastname', array('class' => 'mdl-textfield__input'));
                                    echo '<br />';
                                    echo $this->Form->control('password', array('class' => 'mdl-textfield__input'));
                                    echo '<br />';
                                    echo '<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="isAdmin">';
                                    echo 'isAdmin : <input type="checkbox" id="isAdmin" class="mdl-switch__input">';
                                    echo '<span class="mdl-switch__label"></span>';
                                    echo '</label>';
                                    echo '<br />';
                                    echo $this->Form->control('isTeacher', array('class' => 'mdl-checkbox__input'));
                                    echo '<br />';
                                    echo $this->Form->control('classId', array('class' => 'mdl-textfield__input'));
                                ?>
                            </fieldset>
                            
                            <span style="padding :30px;">
                                <?= $this->Form->button(__('Submit'), array('class' => 'mdl-button')) ?>
                                <?= $this->Form->end() ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
