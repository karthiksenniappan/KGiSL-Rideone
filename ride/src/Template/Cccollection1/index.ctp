<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cccollection1[]|\Cake\Collection\CollectionInterface $cccollection1
 */
echo $this->Html->css('karthik.css');
?>
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home'), ['controller'=>'Admin','action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cccollection1 index large-9 medium-8 columns content">
    <h3><?= __('Cccollection1') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cccollection1 as $cccollection1): ?>
            <tr>
                <td><?= $this->Number->format($cccollection1->id) ?></td>
                <td><?= h($cccollection1->email) ?></td>
                <td><?= h($cccollection1->total_amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Calculate'), ['action' => 'calculate', $cccollection1->email],array('class' => 'btn btn-info')) ?>
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
