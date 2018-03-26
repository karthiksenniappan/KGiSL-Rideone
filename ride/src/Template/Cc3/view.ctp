<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cc3 $cc3
 */
echo $this->Html->css('karthik.css');
?>
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Back'), ['action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class="cc3 view large-9 medium-8 columns content">
    <h3><?= h($cc3->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($cc3->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= h($cc3->total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payable Amount') ?></th>
            <td><?= h($cc3->payable_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Balance') ?></th>
            <td><?= h($cc3->balance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Old Balance') ?></th>
            <td><?= h($cc3->old_balance) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cc3->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paid Date') ?></th>
            <td><?= h($cc3->paid_date) ?></td>
        </tr>
    </table>
    <button onclick="myFunction()" class="btn btn-primary">Print this page</button>
</div>

<script>
function myFunction() {
    window.print();
}
</script>
