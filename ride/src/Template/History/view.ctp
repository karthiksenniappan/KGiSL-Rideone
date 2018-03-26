<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History $history
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit History'), ['action' => 'edit', $history->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete History'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]) ?> </li>
        <li><?= $this->Html->link(__('List History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New History'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="history view large-9 medium-8 columns content">
    <h3><?= h($history->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Booking Number') ?></th>
            <td><?= h($history->booking_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($history->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Place') ?></th>
            <td><?= h($history->start_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Place') ?></th>
            <td><?= h($history->end_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= h($history->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($history->id) ?></td>
        </tr>
    </table>
</div>
