<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History[]|\Cake\Collection\CollectionInterface $history
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home'), ['controller'=>'Admin','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New History'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="history index large-9 medium-8 columns content">
    <h3><?= __('History') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('booking_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($history as $history): ?>
            <tr>
                <td><?= $this->Number->format($history->id) ?></td>
                <td><?= h($history->booking_number) ?></td>
                <td><?= h($history->email) ?></td>
                <td><?= h($history->start_place) ?></td>
                <td><?= h($history->end_place) ?></td>
                <td><?= h($history->amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $history->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $history->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $history->id], ['confirm' => __('Are you sure you want to delete # {0}?', $history->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
