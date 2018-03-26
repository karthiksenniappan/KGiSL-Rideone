<?php echo $this->HTML->css('karthik.css'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emp[]|\Cake\Collection\CollectionInterface $emp
 */
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller'=>'Emp','action' => 'eadd'],array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('New Driver'), ['controller'=>'Driver','action' => 'eindex'],array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('New Login Account'), ['controller'=>'Users','action' => 'eindex'],array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Taxi Assign'), ['controller'=>'Status','action' => 'eindex'],array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Tariff'), ['controller'=>'Tariff','action' => 'eindex'],array('class' => 'btn-link')) ?></li>
    </ul>
</nav>
<div class="emp index large-9 medium-8 columns content">
    <h3><?= __('Emp') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('account') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salary') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emp as $emp): ?>
            <tr>
                <td><?= $this->Number->format($emp->id) ?></td>
                <td><?= h($emp->name) ?></td>
                <td><?= h($emp->gender) ?></td>
                <td><?= h($emp->email) ?></td>
                <td><?= h($emp->mobile) ?></td>
                <td><?= h($emp->account) ?></td>
                <td><?= h($emp->department) ?></td>
                <td><?= h($emp->salary) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'eview', $emp->id],array('class' => 'btn btn-info1')) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'eedit', $emp->id],array('class' => 'btn btn-dark1')) ?>
                    
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