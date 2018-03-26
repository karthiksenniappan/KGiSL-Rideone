<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\History[]|\Cake\Collection\CollectionInterface $history
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><input type="button" name="" value="Home" onclick="back()"></li>
    </ul>
</nav>
<div class="history index large-9 medium-8 columns content">
    <h3><?= __('History') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('booking_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php $i=0;
            //echo $result[0]['value'];
              //  die();
            $count1 = $result[0]['value'];

            while ($i < $count1) { ?>
            <tr>
                <td><?= $this->Number->format($history[$i]['id']) ?></td>
                <td><?= h($history[$i]['booking_number']) ?></td>
                <td><?= h($history[$i]['email']) ?></td>
                <td><?= h($history[$i]['start_place']) ?></td>
                <td><?= h($history[$i]['end_place']) ?></td>
                <td><?= h($history[$i]['amount']) ?></td>
            </tr>
            <?php $i=$i+1; } ?>
        </tbody>
    </table>
    
</div>
<script type="text/javascript">
    function back() {
        // body...
        window.history.back();
    }
</script>