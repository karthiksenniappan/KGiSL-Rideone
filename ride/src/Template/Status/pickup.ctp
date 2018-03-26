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
        <li><?= $this->Html->link(__('Back'), ['controller' => 'alert','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('New Status'), ['action' => 'add'],array('class' => 'btn-link')) ?></li>
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
            <?php $i=0;
            //echo $result[0]['value'];
              //  die();
            $count1 = $result[0]['value'];

            while ($i < $count1) { ?>
            <tr>
                <td><?= h($status[$i]['id']) ?></td>
                <td><?= h($status[$i]['email']) ?></td>
                <td><?= h($status[$i]['now_place']) ?></td>
                <td><?= h($status[$i]['total_count']) ?></td>
                <td><?= h($status[$i]['taxi_number']) ?></td>
                <td><?= h($status[$i]['taxi_status']) ?></td>
                <td><?= h($status[$i]['driver_status']) ?></td>
                <td><?= h($status[$i]['travel_status']) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Start'), ['action' => 'start', $status[$i]['id']],array('class' => 'btn btn-info1')) ?> 
                </td>
            </tr>
            <?php $i=$i+1; } ?>
        </tbody>
    </table>
    
</div>
</body>