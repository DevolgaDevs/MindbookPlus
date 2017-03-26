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
                          <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('userId') ?></th>
                          <th class="mdl-data-table__cell--non-numeric actions" style="text-align:right;"><?= __('Actions') ?></th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($questionChoices as $questionChoice): ?>
                      <tr>
                            <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($questionChoice->id) ?></td>
                            <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($questionChoice->questionId) ?></td>
                            <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($questionChoice->answerId) ?></td>
                            <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($questionChoice->userId) ?></td>
                            <td class="mdl-data-table__cell--non-numeric actions" style="text-align:right;">
                              <?= $this->Html->link(__('View'), ['action' => 'view', $questionChoice->id]) ?>
                          </td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
              </table>
              
          </div>
      </div>
  </div>