<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cccollection2 $cccollection2
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cccollection2'), ['action' => 'edit', $cccollection2->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cccollection2'), ['action' => 'delete', $cccollection2->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cccollection2->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cccollection2'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cccollection2'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cccollection2 view large-9 medium-8 columns content">
    <h3><?= h($cccollection2->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cccollection2->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= h($cccollection2->total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cccollection2->id) ?></td>
        </tr>
    </table>
</div>
