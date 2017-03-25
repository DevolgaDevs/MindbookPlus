<?php
/**
  * @var \App\View\AppView $this
  */
?>
<head><?= $this->Html->css('style_login.css') ?><?= $this->Html->script('script.js') ?></head>

<div class="mdl-layout-title logotext" style="margin-left : 30px;color:white;">min<span class="logotext-color">db</span>ook</div>
    <div class="materialContainer">

        <div class="box">

            <div class="title">Connexion</div>

            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <fieldset>

            <div class="input">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username">
                <span class="spin"></span>
            </div>

            <div class="input">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password">
                <span class="spin"></span>
            </div>

            <div class="button login">
                <?= $this->Form->button(__('Login')); ?>
                <?= $this->Form->end() ?>
                <a href="dashboard.html"><button><span>Connexion</span> <i class="fa fa-check"></i></button></a>
            </div>

            </fieldset>

            <a href="" class="pass-forgot">Mot de passe oublié ?</a>

        </div>

        <div class="overbox">
            <a href="register.html"><div class="material-button alt-2"><span class="shape"></span></div></a>
        </div>

    </div>

<span style="position:absolute; bottom:20px; left:30px; color:white;font-family: 'Roboto', sans-serif;"><b>&copy; 2017 Mindbook. All rights reserved.<br />Designed by Marvin Alves De Jesus - Yann Mortier - Fabien Le Houezec</b></span>

