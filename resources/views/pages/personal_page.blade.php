@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    '(Names) Safe Place'])
@stop

@section('content')

<body id="my_img">

<body id="my_img"> 
    <div class="container">
      <div class="row">
            <div class="col-md-6 ">
              <img src="https://picsum.photos/200/300" class="img-fluid" alt="tiger"> 
            </div>
            <div class="col-md-6">
              <img src="https://picsum.photos/200/300"class="img-fluid" alt="tiger"> 
            </div>
      </div>      
    
       <div class="row">
            <div class="col-md-3">
              <img src="https://picsum.photos/200/300" class="img-thumbnail" alt="tiger"> 
                <h5>
                    My Contacts
                </h5>
            </div>
            <div class="col-md-3">
              <img src="https://picsum.photos/200/300"class="img-thumbnail" alt="tiger"> 
                 <h5>
                    My Images
                </h5>
            </div>
            <div class="col-md-3">
                <img src="https://picsum.photos/200/300" class="img-thumbnail" alt="tiger"> 
                    <h5>
                    Local Activities
                    </h5>
            </div>
            <div class="col-md-3">
              <img src="https://picsum.photos/200/300" class="img-thumbnail" alt="tiger"> 
                 <h5>
                 Spotify
                </h5>
            </div>
       </div>    


    



</body>



@stop