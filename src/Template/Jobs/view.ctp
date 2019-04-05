<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Job'), ['action' => 'edit', $job->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Job'), ['action' => 'delete', $job->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $job->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jobs view large-9 medium-8 columns content">
    <h3><?= h($job->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Jobtitel') ?></th>
            <td><?= h($job->Jobtitel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vollzeit') ?></th>
            <td><?= h($job->Vollzeit) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Firma') ?></th>
            <td><?= h($job->Firma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stadt') ?></th>
            <td><?= h($job->Stadt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Region') ?></th>
            <td><?= h($job->Region) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ansprechpartner') ?></th>
            <td><?= h($job->Ansprechpartner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($job->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Startdatum') ?></th>
            <td><?= h($job->Startdatum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Frist') ?></th>
            <td><?= h($job->Frist) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Firmenadresse') ?></h4>
        <?= $this->Text->autoParagraph(h($job->Firmenadresse)); ?>
    </div>
    <div class="row">
        <h4><?= __('Firmenbeschreibung') ?></h4>
        <?= $this->Text->autoParagraph(h($job->Firmenbeschreibung)); ?>
    </div>
    <div class="row">
        <h4><?= __('Aufgaben') ?></h4>
        <?= $this->Text->autoParagraph(h($job->Aufgaben)); ?>
    </div>
    <div class="row">
        <h4><?= __('Profil') ?></h4>
        <?= $this->Text->autoParagraph(h($job->Profil)); ?>
    </div>
    <div class="row">
        <h4><?= __('Angebot') ?></h4>
        <?= $this->Text->autoParagraph(h($job->Angebot)); ?>
    </div>
</div>
