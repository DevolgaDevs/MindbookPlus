<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card " style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Information sur la classe <?= h($classee->name)?></h4>
                            </div>
                            <hr>
                            <h6 style="margin-left:30px;"><b>ID de la classe : </b><?= $this->Number->format($classee->id) ?></h6>
                            <h6 style="margin-left:30px; margin-top:0px;"><b>Nom : </b><?=  h($classee->name) ?></h6><br />
                            
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            <?php if ($this->request->session()->read('Auth.User.isAdmin') || $this->request->session()->read('Auth.User.isTeacher') ) : ?>
                            <div style="align : center; margin-left:30px;"><a href="/questions/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #3d91ff; color : #ffffff;">
                                    < Retour à la liste
                                </a> 
                                <a href="/classees/edit/<?= $this->Number->format($classee->id) ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #00c96f; color : #ffffff;">
                                    Editer cette classe
                                </a>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
