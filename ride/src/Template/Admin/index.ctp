<?php
echo $this->Html->css('karthik.css');
//echo $this->Html->css('bootstrap1.min.css');
echo $this->Html->css('font-awesome.min.css');
echo $this->Html->css('ionicons.min.css');
echo $this->Html->css('plugins/jvectormap/jquery-jvectormap-1.2.2.css');
echo $this->Html->css('AdminLTE.min.css');
echo $this->Html->css('skins/_all-skins.min.css');
echo $this->Html->css('plugins/iCheck/flat/blue.css');
echo $this->Html->css('plugins/morris/morris.css');
echo $this->Html->css('plugins/jvectormap/jquery-jvectormap-1.2.2.css');
echo $this->Html->css('plugins/datepicker/datepicker3.css');
echo $this->Html->css('plugins/daterangepicker/daterangepicker.css');
echo $this->Html->css('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <script src='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.js'></script>
  <link href='https://api.mapbox.com/mapbox.js/v3.0.1/mapbox.css' rel='stylesheet' />
  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!--
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="admin/font-awesome.min.css">
  <link rel="stylesheet" href="admin/ionicons.min.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  -->
  <style>
    .skyblue{
      color: #C0C0C0;
    }
    .white{
      color: #FFFFFF;
    }
    body {
      margin: 0;
      padding :0;
      background-color:rgb(240, 240, 240);
    }
    .map {
      position: absolute;
      top: 29%;
      bottom: 0;
      left:26%;
      width: 40%;
      height:50%;
    }
    .temp {
      position: absolute;
      top: 10%;
      bottom: 0;
      left:26%;
      width: 17%;
      height:13%;
    }
    .temp1 {
      position: absolute;
      top: 10%;
      bottom: 0;
      left:44%;
      width: 17%;
      height:13%;
    }
    .temp2 {
      position: absolute;
      top: 10%;
      bottom: 0;
      left:62%;
      width: 17%;
      height:13%;
    }
    .temp3 {
      position: absolute;
      top: 10%;
      bottom: 0;
      left:80%;
      width: 17%;
      height:13%;
    }
    .temp4 {
      position: absolute;
      top: 29%;
      bottom: 0;
      left:67%;
    }
  </style>
</head>
<body>
  <?php
   $con = pg_connect("host=localhost port=5432 dbname=ctm user=postgres password=vps2018 ")

   or die('Could not connect: ' . pg_last_error());

   $result1 = pg_query($con,"SELECT * FROM booking"); 
   $count1= pg_num_rows($result1);
   $result2 = pg_query($con,"SELECT * FROM status");
   $count2 = pg_num_rows($result2);
   $result3 = pg_query($con,"SELECT * FROM status WHERE driver_status= 'Active'");
   $count3 = pg_num_rows($result3);
   $result4 = pg_query($con,"SELECT * FROM booking WHERE status = 'Not assign'");
   $count4 = pg_num_rows($result4);
   $result5 = pg_query($con,"SELECT * FROM booking WHERE status = 'success'");
   $count5 = pg_num_rows($result5);
  ?>
  <div class="info-box temp" >
            <span class="info-box-icon bg-aqua">
              <i class="ion ion-ios-gear-outline fa-spin"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">TOTAL Trip</span>
              <span class="info-box-number"><?php echo $count1; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
    <div class="info-box temp1">
            <span class="info-box-icon bg-red">
              <i class="ion ion-nuclear fa-spin"></i></span>
            <div class="info-box-content">
              <span class="info-box-text">waiting</span>
              <span class="info-box-number"><?php echo $count4; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>

<div class="info-box temp2">
            <span class="info-box-icon bg-green">
              <i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">complete</span>
              <span class="info-box-number"><?php echo $count5; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
        <div class="info-box temp3">
            <span class="info-box-icon bg-yellow">
              <i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Driver Status</span>
              <span class="info-box-number"><?php echo $count3; echo "/"; echo $count2; ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
    <div class="temp4">
    <iframe src="https://calendar.google.com/calendar/embed?src=en.indian%23holiday%40group.v.calendar.google.com&ctz=Asia%2FCalcutta" style="border: 0" width="150%" height="71%" frameborder="0" scrolling="no"></iframe>
    </div>
<?php
$conn = pg_connect("host=localhost port=5432 dbname=ctm user=postgres password=vps2018 ")

   or die('Could not connect: ' . pg_last_error());

$result = pg_query($conn,"SELECT * FROM map"); 

$res = pg_fetch_all($result,1);


$count=pg_num_rows($result);

echo "<script>var count = {$count};var one = [],two = [],mobile = [];</script>";

$i=0;
foreach($res as $data){
    echo "<script>mobile[{$i}] = {$data['mobile']};one[{$i}] = {$data['lat']};two[{$i}] = {$data['lng']};</script>";
    $i++;
}

?>
<div class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('View Details') ?></li>
        <li><?= $this->Html->link(__('Admin'), ['controller' => 'Users','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Drivers'), ['controller' => 'Driver','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Taxi'), ['controller' => 'Taxi','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Employee'), ['controller' => 'Emp','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Customers'), ['controller' => 'Customer','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Alert'), ['controller' => 'Alert','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Tariff'), ['controller' => 'Tariff','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('Status'), ['controller' => 'Status','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('CC Collection'), ['controller' => 'Cccollection1','action' => 'index'], array('class' => 'btn-link')) ?></li>
        <li><?= $this->Html->link(__('History'), ['controller' => 'History','action' => 'index'], array('class' => 'btn-link')) ?></li>

    </ul>
</div>


<div id='map-leaflet' class='map' id="side"> </div>

<script>
console.log(name);
console.log(one);
L.mapbox.accessToken = 'pk.eyJ1Ijoia2FydGhpa3Nlbm5peWFwcGFuIiwiYSI6ImNqYzhsMXA1NzAzcWQzM2trcmJreWlvb2oifQ.rVOdiLi6Y1xQPRXN4gLQGA';
var mapLeaflet = L.mapbox.map('map-leaflet', 'mapbox.streets')
  .setView([11.0764, 77.0030], 8);
    var i = 0;
    while(i < count){
    onee = one[i];
    twoo = two[i];
    namee = mobile[i];
    L.marker([onee, twoo]).addTo(mapLeaflet).bindPopup('<h5>'+namee+'</h5>');
    i++;
    }
    mapLeaflet.scrollWheelZoom.disable();
</script>
</body>
</html>


