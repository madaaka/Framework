<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Job $job
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $job->ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $job->ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Jobs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="jobs form large-9 medium-8 columns content">
    <?= $this->Form->create($job) ?>
    <fieldset>
        <legend><?= __('Edit Job') ?></legend>
        <?php
            echo $this->Form->control('Jobtitel');
            echo $this->Form->control('Vollzeit');
            echo $this->Form->control('Startdatum');
            echo $this->Form->control('Firma');
            echo $this->Form->control('Firmenadresse');
            echo $this->Form->control('Firmenbeschreibung');
            echo $this->Form->control('Aufgaben');
            echo $this->Form->control('Profil');
            echo $this->Form->control('Angebot');
            echo $this->Form->control('Frist', ['empty' => true]);
            echo $this->Form->control('Stadt');
            echo $this->Form->control('Region');
            echo $this->Form->control('Ansprechpartner');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
