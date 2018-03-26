<?php echo $this->HTML->css('karthik.css'); ?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Status $status
 */
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Back'), ['action' => 'eindex'],array('class' => 'btn-link')) ?> </li>
        <li><?= $this->Html->link(__('New Status'), ['action' => 'eadd'],array('class' => 'btn-link')) ?> </li>
    </ul>
</nav>
<div class="status view large-9 medium-8 columns content">
    <h3><?= h($status->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($status->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Now Place') ?></th>
            <td><?= h($status->now_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Count') ?></th>
            <td><?= h($status->total_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taxi Number') ?></th>
            <td><?= h($status->taxi_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taxi Status') ?></th>
            <td><?= h($status->taxi_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Driver Status') ?></th>
            <td><?= h($status->driver_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Travel Status') ?></th>
            <td><?= h($status->travel_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($status->id) ?></td>
        </tr>
    </table>
</div>
</body>