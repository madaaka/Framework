<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Benutzer $benutzer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Benutzer'), ['action' => 'edit', $benutzer->Id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Benutzer'), ['action' => 'delete', $benutzer->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $benutzer->Id)]) ?> </li>
        <li><?= $this->Html->link(__('List Benutzer'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Benutzer'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="benutzer view large-9 medium-8 columns content">
    <h3><?= h($benutzer->Id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Benutzername') ?></th>
            <td><?= h($benutzer->Benutzername) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($benutzer->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Passwort') ?></th>
            <td><?= h($benutzer->Passwort) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($benutzer->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($benutzer->Id) ?></td>
        </tr>
    </table>
</div>
