<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List History'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="history form large-9 medium-8 columns content">
    <?= $this->Form->create($history) ?>
    <fieldset>
        <legend><?= __('Add History') ?></legend>
        <?php
            echo $this->Form->control('booking_number');
            echo $this->Form->control('email');
            echo $this->Form->control('start_place');
            echo $this->Form->control('end_place');
            echo $this->Form->control('amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
