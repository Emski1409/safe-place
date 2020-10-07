@extends('layouts.default')

@section('content')
<body>

    <div id="welcome">
      <h1>Welcome to My Safe Place<h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="column-md-6">
        <img src="/images/logo2.png" class="img-fluid" alt="Responsive image">  
        </div>
        <div id="welcome2" class="column-md-6">
        <h2> Whats Your Safe Place? </h2>
        <p> Here you will find lots of information and resources to help  you on your journey to positive mental health. Click the button below to find out more!<p> 
        <button type="button" class="btn btn-secondary btn-lg centred"><a href="{{ route('general') }}">Find out more</a></button>  
      </div>
      
        <div id="wmhd">
        <h1> World Mental Health Day October 10th 2020!</h1>
    </div>
    </div>  
   </div>



 

</body>

@stop