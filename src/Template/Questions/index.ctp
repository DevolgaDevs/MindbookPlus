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
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('text') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('isOpenQuestion') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric"><?= $this->Paginator->sort('sessionId') ?></th>
                                        <th class="mdl-data-table__cell--non-numeric actions" style="text-align:right;"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($questions as $question): ?>
                                    <tr>
                                        <td class="mdl-data-table__cell--non-numeric"><?= $this->Number->format($question->id) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($question->text) ?></td>
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($question->isOpenQuestion) ?></td> 
                                        <td class="mdl-data-table__cell--non-numeric"><?= h($question->sessionId) ?></td> 
                                        <td class="actions" style="text-align:right;">
                                            <?= $this->Html->link('En savoir plus',['action' => 'view', $question->id], ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect', 'style' => 'color : #5C6BC0; margin-right: -16px;']) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <?php if ($this->request->session()->read('Auth.User.isAdmin') || $this->request->session()->read('Auth.User.isTeacher') ) : ?>
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="height : 35px; margin-top:-20px;">
                            <a href="/questions/add" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" 
                            style="background-color: #00c96f; color : #ffffff;  height:50px; ">
                                    <span style="margin-top:20px">Ajouter une question</span>
                                </a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

          
