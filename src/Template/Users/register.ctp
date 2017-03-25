<?php
/**
  * @var \App\View\AppView $this
  */
?>

<script>
    document.getElementById("topnav").remove();
    document.getElementById("sidebar").remove();
    document.getElementById("layout").setAttribute("class", "mdl-layout mdl-js-layout mdl-layout--fixed-header");
    document.getElementById("content").setAttribute("class", "");
</script>

<head><?= $this->Html->css('style_login.css') ?><?= $this->Html->script('script.js') ?></head>

<div class="mdl-layout-title logotext" style="margin-left : 30px;color:white;">min<span class="logotext-color">db</span>ook</div>
    <div class="materialContainer">

        <div class="box">

            <div class="title">Inscription</div>

            <?= $this->Form->create($user) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('username', array('class' => 'mdl-textfield__input'));
                    echo $this->Form->control('firstname', array('class' => 'mdl-textfield__input'));
                    echo $this->Form->control('lastname', array('class' => 'mdl-textfield__input'));
                    echo $this->Form->control('password', array('class' => 'mdl-textfield__input'));
                    echo $this->Form->control('classId', array('class' => 'mdl-textfield__input'));
                    echo '<button class="mdl-button" type="reset" style="width : 100%; top: 30px;">Réinitialiser</button>';
                ?>
            </fieldset>
            <br /><br />
            <span>
                <button class="mdl-button" 
                    type="submit" name="submit" style="width : 100%" 
                    data-upgraded=",MaterialButton">Valider
                </button>
            <?= $this->Form->end() ?>
            </span>
        </div>

    </div>

<span style="position:absolute; bottom:20px; left:30px; color:white;font-family: 'Roboto', sans-serif;"><b>&copy; 2017 Mindbook. All rights reserved.<br />Designed by Marvin Alves De Jesus - Yann Mortier - Fabien Le Houezec</b></span>

