<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job[]|\Cake\Collection\CollectionInterface $jobs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jobs index large-9 medium-8 columns content">
    <h3><?= __('Jobsdsfsjdh') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Jobtitel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Vollzeit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Startdatum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Firma') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Frist') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Stadt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Region') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ansprechpartner') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jobs as $job): ?>
            <tr>
                <td><?= $this->Number->format($job->ID) ?></td>
                <td><?= h($job->Jobtitel) ?></td>
                <td><?= h($job->Vollzeit) ?></td>
                <td><?= h($job->Startdatum) ?></td>
                <td><?= h($job->Firma) ?></td>
                <td><?= h($job->Frist) ?></td>
                <td><?= h($job->Stadt) ?></td>
                <td><?= h($job->Region) ?></td>
                <td><?= h($job->Ansprechpartner) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $job->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $job->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $job->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $job->ID)]) ?>
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
