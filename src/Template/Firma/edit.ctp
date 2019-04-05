<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Firma $firma
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $firma->firmaId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $firma->firmaId)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Firma'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="firma form large-9 medium-8 columns content">
    <?= $this->Form->create($firma) ?>
    <fieldset>
        <legend><?= __('Edit Firma') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('adresseId');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
