<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
          <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 550px;">
              <div class="mdl-card__actions mdl-card--border">
                  <h4 class="profil-list-titre">Liste des réponses pour la question <?= h($questionId); ?></h4>
              </div>
              <table class="mdl-data-table mdl-js-data-table extended-table">
                  <thead>
                      <tr>
                          <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('id') ?></th>
                          <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('questionId') ?></th>
                          <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('answerId') ?></th>
                          <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('isRightAnswer') ?></th>
                          <th class="mdl-data-table__cell--non-numeric actions" style="text-align:right;"><?= __('Actions') ?></th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($questionAnswers as $questionAnswer): ?>
                      <tr>
                            <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($questionAnswer->id) ?></td>
                            <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($questionAnswer->questionId) ?></td>
                            <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($questionAnswer->answerId) ?></td>
                            <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($questionAnswer->isRightAnswer) ?></td>
                            <td class="mdl-data-table__cell--non-numeric actions" style="text-align:right;">
                              <?= $this->Html->link('En savoir plus',['action' => 'view', $questionAnswer->id], ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect', 'style' => 'color : #5C6BC0; margin-right: -16px;']) ?>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
              
          </div>
      </div>
  </div>
  <div class="mdl-grid">
    <?php if ($this->request->session()->read('Auth.User.isAdmin') || $this->request->session()->read('Auth.User.isTeacher') ) : ?>
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="height : 35px; margin-top:-20px;">
                            <a href="/answers/add/<?= h($questionId) ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                            style="background-color: #00c96f; color : #ffffff;  height:50px; ">
                                    <span style="margin-top:20px">Ajouter une réponse</span>
                                </a>
                        </div>
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="height : 35px; margin-top:5px;">
                            <a href="/question-answers/add/<?= h($questionId) ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                            style="background-color: #2E9AFE; color : #ffffff;  height:50px; ">
                                    <span style="margin-top:20px">Associer une réponse</span>
                                </a>
                        </div>
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="height : 35px; margin-top:5px;">
                                <a href="/questions/session/<?= h($questionId) ?>" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                            style="background-color: #5C6BC0; color : #ffffff;  height:50px; margin-top:0px;">
                                    <span style="margin-top:20px">< Retour à la liste des questions</span>
                                </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
