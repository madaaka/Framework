<?= $this->element('nav') ?>
<div class="container mx-auto mt-5" style="margin-top:100px">
<div class="mt-5">
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
  <button type="submit" class="btn btn-primary">Submit</button>
<?= $this->Form->end() ?>
</div>
</div>

