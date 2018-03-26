<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Taxi $taxi
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Taxi'), ['action' => 'edit', $taxi->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Taxi'), ['action' => 'delete', $taxi->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxi->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Taxi'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Taxi'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="taxi view large-9 medium-8 columns content">
    <h3><?= h($taxi->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Owners') ?></th>
            <td><?= h($taxi->owners) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car Name') ?></th>
            <td><?= h($taxi->car_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($taxi->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taxi Number') ?></th>
            <td><?= h($taxi->taxi_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($taxi->id) ?></td>
        </tr>
    </table>
</div>
