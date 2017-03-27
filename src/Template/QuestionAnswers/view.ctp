<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card " style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Réponse possible pour la question</h4>
                            </div>
                            <hr>
                            <h6 style="margin-left:30px;"><b>ID Réponse possible: </b><?= $this->Number->format($questionAnswer->id) ?></h6>
                            <h6 style="margin-left:30px; margin-top:0px;"><b>ID Question : </b><?= $this->Number->format($questionAnswer->questionId) ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>ID Réponse : </b><?= $this->Number->format($questionAnswer->answerId); ?></h6><br />
                            <h6 style="margin-left:30px; margin-top:-20px;"><b>Est la bonne réponse : </b><?= $questionAnswer->isRightAnswer ? __('Yes') : __('No'); ?></h6><br />
                            <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
                            <div style="align : center; margin-left:30px;"><a href="/questions/" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #3d91ff; color : #ffffff;">
                                    < Retour à la liste
                                </a> <a href="/questions/edit/<?= $this->Number->format($question->id) ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #00c96f; color : #ffffff;">
                                    Editer cette question
                                </a>
                                <?= $this->Html->link('Voir les réponses associées',['controller' => 'questionAnswers','action' => 'question', $question->id], ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect', 'style' => 'background-color: #00c96f; color : #ffffff;']) ?>
                                 </div>
                        </div>
                    </div>
                </div>

