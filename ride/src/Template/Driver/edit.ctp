<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver $driver
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $driver->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Driver'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="driver form large-9 medium-8 columns content">
    <?= $this->Form->create($driver) ?>
    <fieldset>
        <legend><?= __('Edit Driver') ?></legend>
        <?php
            echo $this->Form->control('owners');
            echo $this->Form->control('user_name');
            echo $this->Form->control('password');
            echo $this->Form->control('gender');
            echo $this->Form->control('dob');
            echo $this->Form->control('mobile');
            echo $this->Form->control('email');
            echo $this->Form->control('bank_name');
            echo $this->Form->control('account_no');
            echo $this->Form->control('licence_no');
            echo $this->Form->control('licence_due');
            echo $this->Form->control('joining_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
