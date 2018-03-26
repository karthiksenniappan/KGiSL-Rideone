<?php
  echo $this->Html->css('karthik.css');
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tariff[]|\Cake\Collection\CollectionInterface $tariff
 */
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home'), ['controller' => 'Emp','action' => 'eindex'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('New Tariff'), ['action' => 'eadd'],array('class'=>'btn-link')) ?></li>
    </ul>
</nav>
<div class="tariff index large-9 medium-8 columns content">
    <h3><?= __('Tariff') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car_model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categories') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tariff_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('minimum_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('minimun_km') ?></th>
                <th scope="col"><?= $this->Paginator->sort('after_extra_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('night_amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tariff as $tariff): ?>
            <tr>
                <td><?= $this->Number->format($tariff->id) ?></td>
                <td><?= h($tariff->car_model) ?></td>
                <td><?= h($tariff->categories) ?></td>
                <td><?= h($tariff->tariff_type) ?></td>
                <td><?= $this->Number->format($tariff->minimum_amount) ?></td>
                <td><?= $this->Number->format($tariff->minimun_km) ?></td>
                <td><?= $this->Number->format($tariff->after_extra_amount) ?></td>
                <td><?= $this->Number->format($tariff->night_amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'eview', $tariff->id],array('class' => 'btn btn-info1')) ?>
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