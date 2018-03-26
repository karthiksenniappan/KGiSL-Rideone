<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cccollection1 $cccollection1
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cccollection1'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cccollection1 form large-9 medium-8 columns content">
    <?= $this->Form->create($cccollection1) ?>
    <fieldset>
        <legend><?= __('Add Cccollection1') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('total_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
