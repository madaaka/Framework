<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Firma[]|\Cake\Collection\CollectionInterface $firma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Firma'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="firma index large-9 medium-8 columns content">
    <h3><?= __('Firma') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('firmaId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adresseId') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($firma as $firma): ?>
            <tr>
                <td><?= $this->Number->format($firma->firmaId) ?></td>
                <td><?= h($firma->name) ?></td>
                <td><?= $this->Number->format($firma->adresseId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $firma->firmaId]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $firma->firmaId]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $firma->firmaId], ['confirm' => __('Are you sure you want to delete # {0}?', $firma->firmaId)]) ?>
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
