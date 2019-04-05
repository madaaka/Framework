<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Benutzer $benutzer
 */
?>
<?= $this->element('nav') ?>
<div class="benutzer col-6 mx-auto mt-2 border p-3 bg-white shadow container" style="margin-top:100px">
    <?= $this->Form->create($benutzer) ?>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <?= $this->Form->input('Email', ['class' => 'form-control', 'placeholder' => 'Enter email', 'label' => false]) ?>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <?= $this->Form->input('Passwort', ['class' => 'form-control', 'type' => 'password', 'placeholder' => 'Enter password', 'label' => false]) ?>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <?= $this->Form->input('Name', ['class' => 'form-control', 'placeholder' => 'Enter name', 'label' => false]) ?>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Benutzername</label>
            <?= $this->Form->input('Benutzername', ['class' => 'form-control', 'placeholder' => 'Enter user name', 'label' => false]) ?>
          </div>
          <?= $this->Form->button(__('Sign up'), ['class' => 'btn btn-primary']) ?>
        
    <?= $this->Form->end() ?>
</div>
