<?php
echo $this->Html->css('karthik.css');
print_r($value);exit;
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body class="gray-color">
<div class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Booking') ?></li>
        <li><?= $this->Html->link(__('Back'), ['controller' => 'Booking','action' => 'index'], array('class' => 'btn-link')) ?></li>
      
    </ul>

</div>
<div class="customer view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= print_r($mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Car Name') ?></th>
            <td><?= print_r($carmodel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Model') ?></th>
            <td><?= print_r($model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tariff Type') ?></th>
            <td><?= print_r($tariff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distance') ?></th>
            <td><?= print_r($distance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Place') ?></th>
            <td><?= print_r($source) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Destination') ?></th>
            <td><?= print_r($destination) ?></td>
        </tr>
    </table>
</div>

</body>
</html>