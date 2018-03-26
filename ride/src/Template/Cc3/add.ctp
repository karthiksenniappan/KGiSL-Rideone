<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cc3 $cc3
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cc3'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cc3 form large-9 medium-8 columns content">
    <?= $this->Form->create($cc3) ?>
    <fieldset>
        <legend><?= __('Add Cc3') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('paid_date');
            echo $this->Form->control('total_amount');
            echo $this->Form->control('payable_amount');
            echo $this->Form->control('balance');
            echo $this->Form->control('old_balance');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
