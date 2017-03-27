<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card " style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Informations sur l'utilisateur</h4>
                            </div>
                            <hr>

                            <h3 style="margin-left:30px;"><?= h($user->firstname) ?> <?= h($user->lastname) ?></h3>
                            <h6 style="margin-left:30px;"><b>Nom d'utilisateur : </b><?= h($user->username) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Mot de passe : </b><?= h($user->password) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>ID Utilisateur : </b><?= $this->Number->format($user->id) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Promotion : </b><?= $this->Number->format($user->classId) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Droit d'administration : </b><?= $user->isAdmin ? __('Yes') : __('No'); ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Statut Professeur : </b><?= $user->isTeacher ? __('Yes') : __('No'); ?></h6>
                            <br /><br /><br /><br /><br /><br />
                            <div style="align : center; margin-left:30px;">
                            <?php if ($this->request->session()->read('Auth.User.isAdmin')) : ?>
                                <a href="/users/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #3d91ff; color : #ffffff;">
                                    < Retour à la liste
                                </a>
                                <a href="/users/edit/<?= $this->Number->format($user->id) ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #00c96f; color : #ffffff;">
                                    Editer cet utilisateur
                                </a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
