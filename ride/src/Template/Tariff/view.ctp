<?php
  echo $this->Html->css('karthik.css');
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tariff $tariff
 */
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tariff'), ['action' => 'edit', $tariff->id],array('class'=>'btn-link')) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tariff'), ['action' => 'delete', $tariff->id],array('class'=>'btn-link'), ['confirm' => __('Are you sure you want to delete # {0}?', $tariff->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tariff'), ['action' => 'index'],array('class'=>'btn-link')) ?> </li>
        <li><?= $this->Html->link(__('New Tariff'), ['action' => 'add'],array('class'=>'btn-link')) ?> </li>
    </ul>
</nav>
<div class="tariff view large-9 medium-8 columns content">
    <h3><?= h($tariff->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Car Model') ?></th>
            <td><?= h($tariff->car_model) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categories') ?></th>
            <td><?= h($tariff->categories) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tariff Type') ?></th>
            <td><?= h($tariff->tariff_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tariff->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Minimum Amount') ?></th>
            <td><?= $this->Number->format($tariff->minimum_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Minimun Km') ?></th>
            <td><?= $this->Number->format($tariff->minimun_km) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('After Extra Amount') ?></th>
            <td><?= $this->Number->format($tariff->after_extra_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Night Amount') ?></th>
            <td><?= $this->Number->format($tariff->night_amount) ?></td>
        </tr>
    </table>
</div>
</body>