<?php
    echo $this->HTML->css('karthik.css');
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <?php $id = $this->request->session()->read('Auth.User.id'); ?>
        <li><?= $this->Form->postLink(__('Back'), ['controller'=>'Users','action' => 'view', $id],array('class' => 'btn-link')) ?> </li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('mobile');
            echo $this->Form->control('user_role',array('type'=>'hidden','default'=>'Customer'));
            /*echo "<strong>Role</strong>";
            echo '<span style="color:Crimson ;"> *</span>';
            echo "";
             echo $this->Form->select('user_role', [
    'Admin' => 'Admin',
    'Employee' => 'Employee',
    'Driver' => 'Driver',
    'Customer' => 'Customer'
]);
*/
    ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</body>
