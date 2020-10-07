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
          @foreach($images as $image)
            <div class="col-md-6 ">
              <img src="{{ $image->path }}" class="img-fluid" alt="tiger"> 
            </div>
          @endforeach
      </div>   
      <br>
      <br>
      <br>
    
       <div class="row">
            <div class="col-md-3">
            <a href="{{ route('contactpage') }}">
              <img src="{{url('/images/contact.png')}}" class="img-thumbnail" alt="tiger"> 
                <h5>
                    My Contacts
                </h5>
            </div>
            <div class="col-md-3">
              <a href="{{ route('image') }}">
              <img src="{{url('/images/camera1.jpeg')}}"class="img-thumbnail" alt="tiger"> 
                 <h5>
                    My Images
                </h5>
            </div>
            <div class="col-md-3">
                <a href="{{ route('contactpage') }}">
                <img src="{{url('/images/community.png')}}" class="img-thumbnail" alt="tiger"> 
                    <h5>
                    Local Activities
                    </h5>
            </div>
            <div class="col-md-3">
            <a href="https:www.spotify.co.uk">  
            <img src="{{url('/images/spotify.png')}}" 
              class="img-thumbnail" alt="tiger">
                 <h5>
                 Spotify
                </h5>
                
            </div>
            <div>
            <iframe id="spotify" src="https://open.spotify.com/follow/1/?uri=spotify:artist:2RTUTCvo6onsAnheUk3aL9&size=detail&theme=light" width="300" height="56" scrolling="no" frameborder="0" style="border:none; overflow:hidden;" allowtransparency="true"></iframe> 
            </div>
       </div>    


    



</body>



@stop