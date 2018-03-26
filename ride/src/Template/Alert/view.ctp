
<?php
 echo $this->Html->css('karthik.css');
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alert $alert
 */
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Alert'), ['action' => 'edit', $alert->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alert'), ['action' => 'delete', $alert->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alert->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alert'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alert'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alert view large-9 medium-8 columns content">
    <h3><?= h($alert->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Useremail') ?></th>
            <td><?= h($alert->useremail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($alert->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car') ?></th>
            <td><?= h($alert->car) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= h($alert->model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tariff') ?></th>
            <td><?= h($alert->tariff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distance') ?></th>
            <td><?= h($alert->distance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= h($alert->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Night') ?></th>
            <td><?= h($alert->night) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Place') ?></th>
            <td><?= h($alert->start_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Place') ?></th>
            <td><?= h($alert->end_place) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($alert->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($alert->id) ?></td>
        </tr>
    </table>
</div>
</body>