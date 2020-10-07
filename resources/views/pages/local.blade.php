@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'Whats in my local area?'])
@stop
@section('content')

<body> 
  <div  id="local"class="container">
    <div class = "row-center">
      <h1> Find my local mind group <h1>
    </div>
    <br>
    <br>
    <div class = "row">   
      
      <h2>Enter your postcode below:</h2>  
    
    </div>
       
<div class ="container">
      <label>Please enter your postcode</label>
      <input id="lookup_field" type="text" /><br>
      

      <!-- This is your existing form -->
      <label>Address Line One</label>
      <input id="first_line" type="text" /><br>

      <label>Address Line Two</label>
      <input id="second_line" type="text" /><br>

      <label>Town</label>
      <input id="town" type="text" /><br>

      <label>Postcode</label>
      <input id="postcode" type="text" />

 </div> 
 </div> 
 <script>
  
      $('#lookup_field').setupPostcodeLookup({
    // Add your API key
    api_key: 'ak_htaapr1fkpQCzbA66WHfMRAIjotF5',
  // Identify your fields with CSS selectors
  output_fields: {
      line_1: '#first_line',  
      line_2: '#second_line',         
      post_town: '#town',
      postcode: '#postcode'
  }
});

</script>

  <div class="container">

   
      <iframe
        width="600"
        height="450"
        frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed/v1/place?q=newport+mind
        &key=AIzaSyCGTPyCPmK7yyrAJkAHqq4tyGwok6Ptv58" allowfullscreen>
      </iframe>

  </div>
  </div>

 
@endsection