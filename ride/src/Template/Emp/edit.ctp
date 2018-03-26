<?php echo $this->HTML->css('karthik.css'); ?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emp $emp
 */
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employee'), ['action' => 'index'],array('class' => 'btn-link')) ?></li>
    </ul>
</nav>
<div class="emp form large-9 medium-8 columns content">
    <?= $this->Form->create($emp) ?>
    <fieldset>
        <legend><?= __('Edit Emp') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('gender');
            echo $this->Form->control('email');
            echo $this->Form->control('mobile');
            echo $this->Form->control('account');
            echo $this->Form->control('department');
            echo $this->Form->control('salary');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</body>