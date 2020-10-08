@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'Whats in my local area?'])
@stop
@section('content')
<script type="text/javascript">    
		//declare namespace
		var up206b = {};
 
		//declare map
		var map;
 
		function trace(message) 
		{
			if (typeof console != 'undefined') 
			{
				console.log(message);
			}
		}
 
		//Function that gets run when the document loads
		up206b.initialize = function()
		{
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
up206b.geocode = function() 
{
	var address = $('#address').val();
	geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) 
		{
			map.setCenter(results[0].geometry.location);
			var marker = new google.maps.Marker({
				map: map, 
				position: results[0].geometry.location
			});
		} 
		else 
		{
			alert("Geocode was not successful for the following reason: " + status);
		}
	});
}
	</script> 

<div id="map">
<body onload="up206b.initialize()">
  <!-- side panel div container -->
  <div
    style="position:absolute; width:380px; height: 100%; overflow:auto; float:left; padding-left:10px; padding-right:10px;">
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
</div>


 
@endsection