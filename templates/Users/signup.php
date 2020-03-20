<div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Sign Up</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your first name and last name') ?></legend>
         <?= $this->Form->control('first name', ['required' => true]) ?>
          <?= $this->Form->control('last name', ['required' => true]) ?>
           <?= $this->Form->control('username', ['required' => true]) ?>
        <?= $this->Form->control('password', ['required' => true]) ?>
        <?= $this->Form->control('confirm password', ['required' => true]) ?>
        <?= $this->Form->control('contact number', ['required' => true]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Sign Up')); ?>
    <?= $this->Form->end() ?>

    <?= $this->Html->link("Add User", ['action' => 'add']) ?>
</div>