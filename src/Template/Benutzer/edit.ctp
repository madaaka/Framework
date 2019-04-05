<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Benutzer $benutzer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $benutzer->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $benutzer->Id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Benutzer'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="benutzer form large-9 medium-8 columns content">
    <?= $this->Form->create($benutzer) ?>
    <fieldset>
        <legend><?= __('Edit Benutzer') ?></legend>
        <?php
            echo $this->Form->control('Benutzername');
            echo $this->Form->control('Name');
            echo $this->Form->control('Passwort');
            echo $this->Form->control('Email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
