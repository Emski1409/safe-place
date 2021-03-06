<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
  <title>Tutorial 5</title>
  <style type="text/css">
    html {
      height: 100%
    }

    body {
      height: 100%;
      margin: 0px;
      padding: 0px
    }

    #map_canvas {
      height: 100%
    }
  </style>

  <!-- Google Maps and Places API -->
  <script type="text/javascript"
   src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCGTPyCPmK7yyrAJkAHqq4tyGwok6Ptv58&libraries=places&sensor=false"></script>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

  <script type="text/javascript">
    //declare namespace
    var up206b = {};

    //declare map
    var map;

    function trace(message) {
      if (typeof console != 'undefined') {
        console.log(message);
      }
    }

    //Function that gets run when the document loads
    up206b.initialize = function () {
      var latlng = new google.maps.LatLng(34.070264, -118.4440562);
      var myOptions = {
        zoom: 13,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
    }
    //set the geocoder
    var geocoder = new google.maps.Geocoder();
    //geocode function
    up206b.geocode = function () {
      var address = $('#address').val();
      geocoder.geocode({ 'address': address }, function (results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          map.setCenter(results[0].geometry.location);
          var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location
          });
        }
        else {
          alert("Geocode was not successful for the following reason: " + status);
        }
      });
    }
  </script>
</head>

<body onload="up206b.initialize()">
  <!-- side panel div container -->
  <div
    style="position:absolute; width:380px; height: 100%; overflow:auto; float:left; padding-left:10px; padding-right:10px;">
    <h1> Find Your Local Mind</h1>
    <h1>Map Search</h1>
    <!-- search box -->
    <div style="border:1px solid #ccc; background:#e5e5e5; padding:10px;">
      <input type="text" id="address">
      <input type="button" value="find" onClick="up206b.geocode()">
    </div>
  </div>
  </div>
  <!-- map div container -->
  <div id="map_canvas" style="height:100%; margin-left:400px;"></div>
</body>


</html>