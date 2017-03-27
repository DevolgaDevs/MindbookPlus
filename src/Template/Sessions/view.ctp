<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card " style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Informations sur la session</h4>
                            </div>
                            <hr>
                            <h3 style="margin-left:30px;">Session n°<?= $this->Number->format($session->id); ?> : <?= h($session->name); ?></h3>
                            <h6 style="margin-left:30px;"><b>ID Session : </b><?= $this->Number->format($session->id) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Maître de conférence : </b><?=  $this->Number->format($session->userId) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Promotion affectée : </b><?= $this->Number->format($session->classId) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Date : </b><?= h($session->date) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Contient un questionnaire : </b><<?= $session->hasQuestions ? __('Yes') : __('No'); ?></h6>
                            <br /><br /><br /><br /><br /><br /><br /><br />
                            <div style="align : center; "><a href="/sessions/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #3d91ff; color : #ffffff;">
                                    < Retour à la liste
                                    </a>
                            <?php if ($this->request->session()->read('Auth.User.isAdmin') || $this->request->session()->read('Auth.User.isTeacher') ) : ?>
                                <a href="/sessions/edit/<?= $this->Number->format($session->id) ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #00c96f; color : #ffffff;">
                                    Editer cette session
                                </a>
                                <?= $this->Html->link('Voir les questions associées',['controller' => 'questions','action' => 'session', $session->id], ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect', 'style' => 'background-color: #00c96f; color : #ffffff;']) ?>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>


