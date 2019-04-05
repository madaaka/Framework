<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Firma $firma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Firma'), ['action' => 'edit', $firma->firmaId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Firma'), ['action' => 'delete', $firma->firmaId], ['confirm' => __('Are you sure you want to delete # {0}?', $firma->firmaId)]) ?> </li>
        <li><?= $this->Html->link(__('List Firma'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Firma'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="firma view large-9 medium-8 columns content">
    <h3><?= h($firma->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($firma->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FirmaId') ?></th>
            <td><?= $this->Number->format($firma->firmaId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('AdresseId') ?></th>
            <td><?= $this->Number->format($firma->adresseId) ?></td>
        </tr>
    </table>
</div>
