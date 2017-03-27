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
                              <?= $this->Html->link(__('View'), ['action' => 'view', $questionAnswer->id]) ?>
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
                            <a href="/questions/add" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                            style="background-color: #00c96f; color : #ffffff;  height:50px; ">
                                    <span style="margin-top:20px">Ajouter une réponse</span>
                                </a>
                        </div>
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="height : 35px; margin-top:5px;">
                                <a href="/question/session" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                            style="background-color: #5C6BC0; color : #ffffff;  height:50px; margin-top:0px;">
                                    <span style="margin-top:20px">< Retour à la liste des questions</span>
                                </a>
                        </div>
                    </div>
                </div>
