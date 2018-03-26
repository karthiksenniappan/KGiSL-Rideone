<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cc3 $cc3
 */
echo $this->Html->script('jquery.min.js');
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cc3->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cc3->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cc3'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cc3 form large-9 medium-8 columns content">
    <?= $this->Form->create($cc3) ?>
    <fieldset>
        <legend><?= __('Edit Cc3') ?></legend>
        <?php
            echo $this->Form->control('email',array('type'=>'text', 'readonly' => 'readonly'));
            echo $this->Form->control('paid_date');
            echo $this->Form->control('total_amount',array('type'=>'text', 'readonly' => 'readonly'));
            echo $this->Form->control('payable_amount');
            echo $this->Form->control('balance',array('type'=>'text', 'readonly' => 'readonly'));
            echo $this->Form->control('old_balance',array('type'=>'text', 'readonly' => 'readonly'));
            echo $this->Form->control('old_bal',array('type'=>'hidden', 'readonly' => 'readonly'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
    $("#old-bal").val($("#old-balance").val());
    function calc(){
        oldbalance=0;balance=0;
    balance = $("#total-amount").val()-$("#payable-amount").val()
    //balance = -$("#payable-amount").val()
    $("#balance").val(balance);
    oldbalance=parseInt($('#old-bal').val())+parseInt($("#balance").val());
    $('#old-balance').val(oldbalance);

}   

$("#payable-amount").on("input",function(){

    calc();
})
</script>


