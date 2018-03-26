<?php
echo $this->Html->css('karthik.css');

?>

<!DOCTYPE html>
<html>
<head>
</head>
<style type="text/css">
    .left{
         position: absolute;
      top: 19%;
      bottom: 0;
      left:25%;
      width: 74%;
      height:50%;
    }

</style>
<body>
<div class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Booking') ?></li>
        <li><?= $this->Html->link(__('Back'), ['controller' => 'Booking','action' => 'index'], array('class' => 'btn-link')) ?></li>
      
    </ul>
    

</div>
<div class="left">
<table align="center" border="0" width="80%">
<tr>
<th>ID</th>
<th>Mobile</th>
<th>Car</th>
<th>Model</th>
<th>Tariff</th>
<th>Distance</th>
<th>Amount</th>
<th>Night</th>
<th>Start Place</th>
<th>End Place</th>
<th>Status</th>
<th>Action</th>
</tr>
<?php
$conn = pg_connect("host=localhost port=5432 dbname=ctm user=postgres password=vps2018 ")

   or die('Could not connect: ' . pg_last_error());

   $usermail = $this->request->session()->read('Auth.User.email');

   $result = pg_query($conn,"SELECT * FROM alert WHERE useremail = '{$usermail}' ");
   //$res = pg_fetch_all($result,1);

while($row=pg_fetch_array($result))
{
 ?>
    <tr>
    <td><p><?php echo $row['id']; ?></p></td>
    <td><p><?php echo $row['mobile']; ?></p></td>
    <td><p><?php echo $row['car']; ?></p></td>
    <td><p><?php echo $row['model']; ?></p></td>
    <td><p><?php echo $row['tariff']; ?></p></td>
    <td><p><?php echo $row['distance']; ?></p></td>
    <td><p><?php echo $row['amount']; ?></p></td>
    <td><p><?php echo $row['night']; ?></p></td>
    <td><p><?php echo $row['start_place']; ?></p></td>
    <td><p><?php echo $row['end_place']; ?></p></td>
    <td><p><?php echo $row['status']; ?></p></td>
    <td><?php $id = $this->request->session()->read('Auth.User.id'); ?>
        <li><?= $this->Form->postLink(__('Cancel'), ['controller'=>'Booking','action' => 'cancel', $row['id']],array('class' => 'btn btn-primary')) ?> </li></td>
    </tr>
    <?php
}
?>
</table>
</div>
</body>
</html>