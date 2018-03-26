<?php
echo $this->Html->css('karthik.css');
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<body class="taxi">
<div class="form large-4 medium-8 columns content" align="text-center">
    <div class="panel">
        <h2 class="text-center">Login</h2>
        <?= $this->Form->create(); ?>
            <?= $this->Form->input('email'); ?>
            <?= $this->Form->input('password', array('type' => 'password')); ?>
    </div>

            <?= $this->Form->button(__('Signin'),['class'=>'btn btn-primary']) ?> 
              
        <?= $this->Form->end(); ?> 
<?= $this->Form->button(__('welcome to all'),['class'=>'btn btn-primary']) ?>
    
</div>
</body>