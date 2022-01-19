<!-- in /templates/Users/login.php -->
<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        <?= $this->Form->control('email', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Add User", ['prefix'=>false,'controller'=>'Carusers','action' => 'add']) ?><br>
    <?= $this->Html->link("Admin Login", ['prefix'=>'Admin','controller'=>'Carusers','action' => 'login']) ?>
    <?= $this->Html->link("Admin Login", ['prefix'=>false,'controller'=>'Carusers','action' => 'login']) ?>


</div>