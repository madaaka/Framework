<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Adresse $adresse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $adresse->adresseId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $adresse->adresseId)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Adresse'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="adresse form large-9 medium-8 columns content">
    <?= $this->Form->create($adresse) ?>
    <fieldset>
        <legend><?= __('Edit Adresse') ?></legend>
        <?php
            echo $this->Form->control('stadt');
            echo $this->Form->control('Hausnr');
            echo $this->Form->control('strasse');
            echo $this->Form->control('region');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
