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
        <li><?= $this->Html->link(__('List Status'), ['action' => 'index'],array('class' => 'btn-link')) ?></li>
    </ul>
</nav>
<div class="status form large-9 medium-8 columns content">
    <?= $this->Form->create($status) ?>
    <fieldset>
        <legend><?= __('Add Status') ?></legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('now_place');
            echo $this->Form->control('total_count');
            echo $this->Form->control('taxi_number');
            //echo $this->Form->control('taxi_status');

            echo "<strong>Taxi Status</strong>";
            echo '<span style="color:Crimson ;"> *</span>';
            echo " ";

             echo $this->Form->select('taxi_status', [
            'Working' => 'Working',
            'Repair' => 'Repair'
        ]);

            echo $this->Form->control('driver_status');
            echo $this->Form->control('travel_status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</body>