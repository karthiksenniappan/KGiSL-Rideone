<?php
  echo $this->Html->css('karthik.css');
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tariff'), ['action' => 'index'],array('class' => 'btn-link')) ?></li>
    </ul>
</nav>
<div class="tariff form large-9 medium-8 columns content">
    <?= $this->Form->create($tariff) ?>
    <fieldset>
        <legend><?= __('Add Tariff') ?></legend>
        <?php
            echo $this->Form->control('car_model');
            echo $this->Form->control('categories');
            echo $this->Form->control('tariff_type');
            echo $this->Form->control('minimum_amount');
            echo $this->Form->control('minimun_km');
            echo $this->Form->control('after_extra_amount');
            echo $this->Form->control('night_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</body>
