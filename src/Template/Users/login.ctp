<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->control('USER_MAIL') ?>
<?= $this->Form->control('USER_PASSWORD') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>