<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cccollection2 $cccollection2
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cccollection2'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cccollection2 form large-9 medium-8 columns content">
    <?= $this->Form->create($cccollection2) ?>
    <fieldset>
        <legend><?= __('Add Cccollection2') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('total_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
