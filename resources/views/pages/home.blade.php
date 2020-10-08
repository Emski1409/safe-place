@extends('layouts.default')

@section('content')
    <br>
    <div id="welcome">
      <h1>Welcome to My Safe Place<h1>
    </div>
    <br>
    <br>
    <div class="col-container">
  <div class="row">    
  <div class="col" style="background:rgb(0,128,128);background:linear-gradient(174deg, rgba(0,128,128,1) 12%, rgba(72,75,75,0.9430147058823529) 69%);">
    <img src="/images/logo2.png" class="img-fluid max-width: 100vh" alt="Responsive image"> 
  </div>
  <div class="col col-md-6" style="background:rgb(0,128,128);background:linear-gradient(174deg, rgba(0,128,128,1) 12%, rgba(72,75,75,0.9430147058823529) 69%);">   
      <h1 style="color: black;"> Whats Your Safe Place?</h1>
      <p id="hp2"> Here you will find lots of information and resources to help  you on your journey to positive mental health. Click the button below to find out more!<p> 
    <button type="button" class="btn btn-secondary btn-lg centred"><a href="{{ route('general') }}">Find out more</a></button>          
  </div> 
  </div>
  <div class="row">
  <div class="col" style="background:rgb(0,128,128);background:linear-gradient(174deg, rgba(0,128,128,1) 12%, rgba(72,75,75,0.9430147058823529) 69%);"; padding-left: 30px; ">
    <h1>Local Support Groups</h1>
    <br>
    <br>
    <br>
    <button type="button" class="btn btn-secondary btn-lg centred"><a href="{{ route('local') }}">Find local groups</a></button> 
    <br>
    <p style="font-size: 30px"> Click the button to find out what groups are available in your area </p>
  </div>  
          <div class="row">
            <div class="column-md-12">
                <img src="/images/community.png" class="img-fluid" alt="Responsive image"> 
            </div>    
          </div>
      </div> 
      </div>

  </div>
  </div>
  <div class="col-container">
  <div class="row">    
  <div class="col" style="background:rgb(0,128,128);background:linear-gradient(174deg, rgba(0,128,128,1) 12%, rgba(72,75,75,0.9430147058823529) 69%);">
    <img src="/images/wmhd.jpg" class="rounded" alt="Responsive image"> 
  </div>
  <div class="col" style="background:rgb(0,128,128);background:linear-gradient(174deg, rgba(0,128,128,1) 12%, rgba(72,75,75,0.9430147058823529) 69%);">   
      <h1 style="color: black;"> World Mental Health Day October 10th 2020!</h1>
      <p id="hp2">Take a positive step to improve your mental health today - Click the button to sign up today! <p> 
    <button type="button" class="btn btn-secondary btn-lg centred"><a href="{{ route('register') }}">Sign Up Here!</a></button>          
  </div> 
  </div>
@stop