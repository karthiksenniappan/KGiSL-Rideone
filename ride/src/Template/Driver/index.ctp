<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver[]|\Cake\Collection\CollectionInterface $driver
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Driver'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="driver index large-9 medium-8 columns content">
    <h3><?= __('Driver') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('owners') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dob') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bank_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('licence_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('licence_due') ?></th>
                <th scope="col"><?= $this->Paginator->sort('joining_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($driver as $driver): ?>
            <tr>
                <td><?= $this->Number->format($driver->id) ?></td>
                <td><?= h($driver->owners) ?></td>
                <td><?= h($driver->user_name) ?></td>
                <td><?= h($driver->password) ?></td>
                <td><?= h($driver->gender) ?></td>
                <td><?= h($driver->dob) ?></td>
                <td><?= h($driver->mobile) ?></td>
                <td><?= h($driver->email) ?></td>
                <td><?= h($driver->bank_name) ?></td>
                <td><?= h($driver->account_no) ?></td>
                <td><?= h($driver->licence_no) ?></td>
                <td><?= h($driver->licence_due) ?></td>
                <td><?= h($driver->joining_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $driver->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $driver->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $driver->id], ['confirm' => __('Are you sure you want to delete # {0}?', $driver->id)]) ?>
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
