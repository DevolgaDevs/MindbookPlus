<?php
/**
  * @var \App\View\AppView $this
  */
?>

                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet">
                        <div class="mdl-card session-list-card mdl-shadow--2dp" style="overflow-y : auto; height : 650px;">
                            <div class="mdl-card__actions mdl-card--border">
                                <h4 class="profil-list-titre">Editer un utilisateur</h4>
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
                                    echo $this->Form->control('classId', array('type'=>'select','options'=>$classees));
                                    echo '<br />';
                                    echo '<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="isAdmin">';
                                    echo '<input type="checkbox" id="isAdmin" class="mdl-switch__input">';
                                    echo '<span class="mdl-switch__label">Autoriser l\'administration</span>';
                                    echo '</label>';
                                    echo '<br /><br />';
                                    echo '<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="isTeacher">';
                                    echo '<input type="checkbox" id="isTeacher" class="mdl-switch__input">';
                                    echo '<span class="mdl-switch__label">Définir en tant que professeur</span>';
                                    echo '</label>';
                                    echo '<br />';
                                ?>
                            </fieldset>
                            
                            <span style="padding :30px;">
                                <button class="mdl-button" 
                                type="submit" name="submit" style="width : 200px" 
                                data-upgraded=",MaterialButton">Valider
                                </button>
                                <?= $this->Form->end() ?>
                            </span>
                        </div>
                    </div>
                </div>

