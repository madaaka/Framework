<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adresse $adresse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Adresse'), ['action' => 'edit', $adresse->adresseId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Adresse'), ['action' => 'delete', $adresse->adresseId], ['confirm' => __('Are you sure you want to delete # {0}?', $adresse->adresseId)]) ?> </li>
        <li><?= $this->Html->link(__('List Adresse'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Adresse'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="adresse view large-9 medium-8 columns content">
    <h3><?= h($adresse->adresseId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Stadt') ?></th>
            <td><?= h($adresse->stadt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hausnr') ?></th>
            <td><?= h($adresse->Hausnr) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Strasse') ?></th>
            <td><?= h($adresse->strasse) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($adresse->region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AdresseId') ?></th>
            <td><?= $this->Number->format($adresse->adresseId) ?></td>
        </tr>
    </table>
</div>
