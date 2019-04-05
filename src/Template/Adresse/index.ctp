<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adresse[]|\Cake\Collection\CollectionInterface $adresse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Adresse'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="adresse index large-9 medium-8 columns content">
    <h3><?= __('Adresse') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('stadt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Hausnr') ?></th>
                <th scope="col"><?= $this->Paginator->sort('strasse') ?></th>
                <th scope="col"><?= $this->Paginator->sort('region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresseId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adresse as $adresse): ?>
            <tr>
                <td><?= h($adresse->stadt) ?></td>
                <td><?= h($adresse->Hausnr) ?></td>
                <td><?= h($adresse->strasse) ?></td>
                <td><?= h($adresse->region) ?></td>
                <td><?= $this->Number->format($adresse->adresseId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $adresse->adresseId]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $adresse->adresseId]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $adresse->adresseId], ['confirm' => __('Are you sure you want to delete # {0}?', $adresse->adresseId)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
