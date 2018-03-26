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
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $alert->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $alert->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Alert'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alert form large-9 medium-8 columns content">
    <?= $this->Form->create($alert) ?>
    <fieldset>
        <legend><?= __('Edit Alert') ?></legend>
        <?php
            echo $this->Form->control('useremail');
            echo $this->Form->control('mobile');
            echo $this->Form->control('car');
            echo $this->Form->control('model');
            echo $this->Form->control('tariff');
            echo $this->Form->control('distance');
            echo $this->Form->control('amount');
            echo $this->Form->control('night');
            echo $this->Form->control('start_place');
            echo $this->Form->control('end_place');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
</body>