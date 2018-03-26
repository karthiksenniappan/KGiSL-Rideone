<?php
 echo $this->HTML->css('karthik.css');
 echo $this->Html->script('bootstrap.min.js');
 echo $this->Html->script('jquery.min.js');
?>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alert[]|\Cake\Collection\CollectionInterface $alert
 */
?>
<style>
.outer { 
        position: absolute; 
        top: 10;
        bottom: 0;
        left:25%;  
        width: 75%;
        max-height: 100%;
        margin: 0;
        overflow-x: hidden;
        overflow-y: auto;
        line-height: 20px;
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4);
 }
 </style>
<body class="gray-color">
<nav class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Home'), ['controller' => 'Admin','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Pickup'), ['controller' => 'Status','action' => 'pickup'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Drop'), ['controller' => 'Status','action' => 'drop'], array('class' => 'btn-link')) ?></li>
    </ul>
</nav>
<div class="alert index large-9 medium-8 columns content">
    <h3><?= __('Alert') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('useremail') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('car') ?></th>
                <th scope="col"><?= $this->Paginator->sort('model') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tariff') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distance') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('night') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end_place') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alert as $alert): ?>
            <tr>
                <td><?= $this->Number->format($alert->id) ?></td>
                <td><?= h($alert->useremail) ?></td>
                <td><?= h($alert->mobile) ?></td>
                <td><?= h($alert->car) ?></td>
                <td><?= h($alert->model) ?></td>
                <td><?= h($alert->tariff) ?></td>
                <td><?= h($alert->distance) ?></td>
                <td><?= h($alert->amount) ?></td>
                <td><?= h($alert->night) ?></td>
                <td><?= h($alert->start_place) ?></td>
                <td><?= h($alert->end_place) ?></td>
                <td><?= h($alert->status) ?></td>
                <td class="actions">
                    <button class="btn btn-danger1" value="<?= $alert->id ?>">Assign</button>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>


<div id="modal" class="modal hide outer"  role="dialog">
  <div class="modal-dialog modal-lg" >

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  data-dismiss="modal" onclick="modalClose()">&times;</button>
      </div>
      <div class="modal-body" id="myData">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="modalClose()">Close</button>
      </div>
    </div>

  </div>

</div>

<script>
    $("button").click(function(e) {
        $.ajax({
          url :"alert/assign",
          type : 'POST',
          data:{"value":$(this).val(),
          
            },
             success : function(data) {
              $('#myData').html(data);
              $('#modal').show();
           //alert(data);// will alert "ok"

        },
        error : function() {
           alert("false");
        }
        })});

        
        /*function setResource(resource) {
            var upgResource = resource;
            $.ajax({
                type: "POST",
                data: {
                    id: upgResource
                },
                url: "alert/assign",
                dataType: "json",
                async: true,
                beforeSend: function(){
                    $(".ajaxTest").text("Trying to recove...");
                },
                success: function(data) {
                    $(".ajaxTest").text(data.a);
                    if (data.b == "true") {
                        location.reload();
                    }
                }
            }); 
        }
        */
    function modalClose(){
      location.reload(); 
       //window.history.back();
      //$('#modal').die();
      //$('#modal').html(style = "display: none;");
    }
    
</script>
</body>