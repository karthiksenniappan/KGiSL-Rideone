<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Taxi $taxi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $taxi->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $taxi->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Taxi'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="taxi form large-9 medium-8 columns content">
    <?= $this->Form->create($taxi) ?>
    <fieldset>
        <legend><?= __('Edit Taxi') ?></legend>
        <?php
            echo $this->Form->control('owners');
            echo $this->Form->control('car_name');
            echo $this->Form->control('model');
            echo $this->Form->control('taxi_number');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
