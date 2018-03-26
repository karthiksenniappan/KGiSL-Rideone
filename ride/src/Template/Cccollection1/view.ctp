<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cccollection1 $cccollection1
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cccollection1'), ['action' => 'edit', $cccollection1->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cccollection1'), ['action' => 'delete', $cccollection1->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cccollection1->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cccollection1'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cccollection1'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cccollection1 view large-9 medium-8 columns content">
    <h3><?= h($cccollection1->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cccollection1->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= h($cccollection1->total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cccollection1->id) ?></td>
        </tr>
    </table>
</div>
