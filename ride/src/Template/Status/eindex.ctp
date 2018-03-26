<?php echo $this->HTML->css('karthik.css'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status[]|\Cake\Collection\CollectionInterface $status
 */
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home'), ['controller' => 'Emp','action' => 'eindex'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['action' => 'eadd'],array('class' => 'btn-link')) ?></li>
    </ul>
</nav>
<div class="status index large-9 medium-8 columns content">
    <h3><?= __('Status') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('now_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taxi_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taxi_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('driver_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('travel_status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($status as $status): ?>
            <tr>
                <td><?= $this->Number->format($status->id) ?></td>
                <td><?= h($status->email) ?></td>
                <td><?= h($status->now_place) ?></td>
                <td><?= h($status->total_count) ?></td>
                <td><?= h($status->taxi_number) ?></td>
                <td><?= h($status->taxi_status) ?></td>
                <td><?= h($status->driver_status) ?></td>
                <td><?= h($status->travel_status) ?></td>
                <td><?= $this->Html->link(__('View'), ['action' => 'eview', $status->id],array('class'=>'btn btn-info1')) ?>
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
</body>