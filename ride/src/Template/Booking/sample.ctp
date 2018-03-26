<?php
echo $this->Html->css('karthik.css');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <script src="js/mapbox-gl.js"></script>
    <link href="css/mapbox-gl.css" rel="stylesheet">
    <style>
        body { margin:0; padding:0; }
        #map { position: absolute;
                top: 10;
                bottom: 0;
                left:25%;
                width: 75%;
                height:93%; }
        select:invalid { color: gray; }
    </style>
</head>

<body>
  <div class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Booking</li>
        <li><a href="/ride/admin" class="btn btn-link">Home</a></li>
        <input class="controls" placeholder="Mobile Number" id="mobile" type="text"><br>
        <select style="width: 100%;" id="carmodel" required="">
          <option value="" disabled="" selected="" hidden="">Select Carmodel</option>
          <option value="volvo">Volvo</option>
          <option value="saab">Saab</option>
          <option value="opel">Opel</option>
          <option value="audi">Audi</option>
        </select>
        <button class="btn btn-primary">Ready</button>
    </ul>
</div>
<script src="js/mapbox-gl-directions.js"></script>
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="css/mapbox-gl-directions.css" type="text/css">
<div id="map" class="mapboxgl-map"><div class="mapboxgl-missing-css">Missing Mapbox GL JS CSS</div><div class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate"><canvas class="mapboxgl-canvas" style="position: absolute; width: 1012px; height: 326px;" tabindex="0" aria-label="Map" width="1012" height="326"></canvas></div><div class="mapboxgl-control-container"><div class="mapboxgl-ctrl-top-left"><div class="mapboxgl-ctrl-directions mapboxgl-ctrl"><div class="directions-control directions-control-inputs"><div class="mapbox-directions-component mapbox-directions-inputs">
  <div class="mapbox-directions-component-keyline">
    <div class="mapbox-directions-origin">
      <label class="mapbox-form-label">
        <span class="directions-icon directions-icon-depart"></span>
      </label>
      <div id="mapbox-directions-origin-input"><div class="mapboxgl-ctrl-geocoder"><span class="geocoder-icon geocoder-icon-search"></span><input placeholder="Choose a starting place" type="text"><ul class="suggestions" style="display: none;"></ul><div class="geocoder-pin-right"><button class="geocoder-icon geocoder-icon-close"></button><span class="geocoder-icon geocoder-icon-loading"></span></div></div></div>
    </div>

    <button class="directions-icon directions-icon-reverse directions-reverse js-reverse-inputs" title="Reverse origin &amp; destination">
    </button>

    <div class="mapbox-directions-destination">
      <label class="mapbox-form-label">
        <span class="directions-icon directions-icon-arrive"></span>
      </label>
      <div id="mapbox-directions-destination-input"><div class="mapboxgl-ctrl-geocoder"><span class="geocoder-icon geocoder-icon-search"></span><input placeholder="Choose destination" type="text"><ul class="suggestions" style="display: none;"></ul><div class="geocoder-pin-right"><button class="geocoder-icon geocoder-icon-close"></button><span class="geocoder-icon geocoder-icon-loading"></span></div></div></div>
    </div>
  </div>

  <div class="mapbox-directions-profile mapbox-directions-component-keyline mapbox-directions-clearfix"><input id="mapbox-directions-profile-driving-traffic" name="profile" checked="" type="radio">
    <label for="mapbox-directions-profile-driving-traffic">Traffic</label>
    <input id="mapbox-directions-profile-driving" name="profile" type="radio">
    <label for="mapbox-directions-profile-driving">Driving</label>
    <input id="mapbox-directions-profile-walking" name="profile" type="radio">
    <label for="mapbox-directions-profile-walking">Walking</label>
    <input id="mapbox-directions-profile-cycling" name="profile" type="radio">
    <label for="mapbox-directions-profile-cycling">Cycling</label>
  </div>
</div>
</div><div class="directions-control directions-control-instructions"></div></div></div><div class="mapboxgl-ctrl-top-right"></div><div class="mapboxgl-ctrl-bottom-left"><div class="mapboxgl-ctrl" style="display: block;"><a class="mapboxgl-ctrl-logo" target="_blank" href="https://www.mapbox.com/" aria-label="Mapbox logo"></a></div></div><div class="mapboxgl-ctrl-bottom-right"><div class="mapboxgl-ctrl mapboxgl-ctrl-attrib"><a href="https://www.mapbox.com/about/maps/" target="_blank">© Mapbox</a> <a href="http://www.openstreetmap.org/about/" target="_blank">© OpenStreetMap</a> <a class="mapbox-improve-map" href="https://www.mapbox.com/feedback/?owner=mapbox&amp;id=streets-v9&amp;access_token=pk.eyJ1Ijoia2FydGhpa3Nlbm5peWFwcGFuIiwiYSI6ImNqYzhsMXA1NzAzcWQzM2trcmJreWlvb2oifQ.rVOdiLi6Y1xQPRXN4gLQGA" target="_blank">Improve this map</a></div></div></div></div>
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

$.ajax({
  url :"",
  data:{"mobile":$("#mobile").text(),
  "carmodel":$("#carmodel").text(),
  "source":$("#").text(),
  "destination":$("#").text(),
  "distance":$("#h1")
    },
  success:function(msg){
    if(msg==0){
      alert("");

    }

  }

});

</script>
</body>
</html>