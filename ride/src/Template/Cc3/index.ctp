<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cc3[]|\Cake\Collection\CollectionInterface $cc3
 */
echo $this->Html->css('karthik.css');
?>
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back'), ['controller'=>'Cccollection1','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cc3 index large-9 medium-8 columns content">
    <h3><?= __('Cc3') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paid_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payable_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('balance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('old_balance') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cc3 as $cc3): ?>
            <tr>
                <td><?= $this->Number->format($cc3->id) ?></td>
                <td><?= h($cc3->email) ?></td>
                <td><?= h($cc3->paid_date) ?></td>
                <td><?= h($cc3->total_amount) ?></td>
                <td><?= h($cc3->payable_amount) ?></td>
                <td><?= h($cc3->balance) ?></td>
                <td><?= h($cc3->old_balance) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Pay'), ['action' => 'edit', $cc3->id],array('class' => 'btn btn-info1')) ?>
                    <?= $this->Html->link(__('Print'), ['action' => 'view', $cc3->id],array('class' => 'btn btn-dark1')) ?>
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
