<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="mdl-grid">
      <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
          <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 550px;">
              <div class="mdl-card__actions mdl-card--border">
                  <h4 class="profil-list-titre">Liste des questions</h4>
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
