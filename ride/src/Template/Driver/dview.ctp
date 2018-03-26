<?php 
    echo $this->HTML->css('karthik.css');
 ?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Driver $driver
 */
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('History'), ['controller'=>'History','action' => 'sample', $driver->email],array('class' => 'btn-link')) ?> </li>
    </ul>
</nav>
<div class="driver view large-9 medium-8 columns content">
    <h3><?= h($driver->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($driver->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($driver->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($driver->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($driver->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bank Name') ?></th>
            <td><?= h($driver->bank_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Account No') ?></th>
            <td><?= h($driver->account_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Licence No') ?></th>
            <td><?= h($driver->licence_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($driver->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dob') ?></th>
            <td><?= h($driver->dob) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Licence Due') ?></th>
            <td><?= h($driver->licence_due) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Joining Date') ?></th>
            <td><?= h($driver->joining_date) ?></td>
        </tr>
    </table>
</div>
</body>