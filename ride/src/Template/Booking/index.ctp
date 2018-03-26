<?php
echo $this->Html->css('karthik.css');
echo $this->Html->script('bootstrap.min.js');
echo $this->Html->script('jquery.min.js');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='js/mapbox-gl.js'></script>
    <link href='css/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map { position: absolute;
                top: 10;
                bottom: 0;
                left:25%;
                width: 75%;
                height:93%; }
        select:invalid { color: gray; }

        .smallsize{
                position: absolute;
                width: 75%;
                height:70%;
        }
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
 .black{
  color: #000000;
 }

    </style>
</head>
<body>

  <div class="large-3 medium-4 columns" id="sidebar">
    <ul class="side-nav">
        <!-- <li class="heading"></li>-->
        <?php $id = $this->request->session()->read('Auth.User.id'); ?>
        <li><?= $this->Form->postLink(__('Personal Details'), ['controller'=>'Users','action' => 'view', $id],array('class' => 'btn-link')) ?> </li>
        <li><?= $this->Html->link(__('Booking Details'), ['controller' => 'Booking','action' => 'view'], array('class' => 'btn-link')) ?></li>
        <input class="controls" type="text" placeholder="Mobile Number" id="mobile"><br>
        <select style="width: 100%;" id="carmodel" required>
          <option value="" disabled selected hidden>Select Car</option>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>
        <select style="width: 100%;" id="model" required>
          <option value="" disabled selected hidden>Select model</option>
          <option value="mini">Mini</option>
          <option value="miniac">Mini AC</option>
          <option value="micro">Micro</option>
          <option value="microac">Micro AC</option>
        </select>
        <select style="width: 100%;" id="Tarifftype" required>
          <option value="" disabled selected hidden>Select Tariff Type</option>
          <option value="one to one">One to One</option>
          <option value="Hours">Hours</option>
        </select>
        <button class="btn btn-primary" >Ready</button>
    </ul>
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

<script src='js/mapbox-gl-directions.js'></script>
<script src="js/jquery.min.js"></script>
<link rel='stylesheet' href='css/mapbox-gl-directions.css' type='text/css' />
<div id='map'></div>
<script>
mapboxgl.accessToken = 'pk.eyJ1Ijoia2FydGhpa3Nlbm5peWFwcGFuIiwiYSI6ImNqYzhsMXA1NzAzcWQzM2trcmJreWlvb2oifQ.rVOdiLi6Y1xQPRXN4gLQGA';
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: [78.6569, 11.1271],
    zoom: 9
});

map.addControl(new MapboxDirections({
    accessToken: mapboxgl.accessToken
}), 'top-left');
var samp = map.on('dragend', function(e){
     var latlng=console.log(e.target._latlng);
});
</script>
<script>
    $("button").click(function(e) {
        $.ajax({
          url :"booking/confirmed",
          type : 'POST',
          data:{"mobile":$("#mobile").val(),
          "carmodel":$("#carmodel").val(),
          "model":$("#model").val(),
          "Tariff":$("#Tarifftype").val(),
          "source":$("#Source").val(),
          "destination":$("#Destination").val(),
          "Distance":$("h2").text()
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
    function modalClose(){
      location.reload(); 
       //window.history.back();
      //$('#modal').die();
      //$('#modal').html(style = "display: none;");
    }
    
</script>

</body>
</html>