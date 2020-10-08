@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'My Safe Place'])
@stop

@section('content')


<body id="my_img"> 
    <div id="fav" class="container">
      <div class="row">
          @foreach($images as $image)
            <div class="col-md-6 ">
              <img src="{{ $image->path }}" class="img-fluid" alt="tiger"> 
            </div>
          @endforeach
      </div> 
    </div>  
      <br>
      <br>
      <br>
      <div id="personallinks" class="container">
       <div class="row">
            <div class="col-md-4">
              <a href="{{ route('contactpage') }}">
                <img src="{{url('/images/contact.png')}}" class="img-thumbnail" alt="tiger"> 
                  <h5>
                      My Contacts
                  </h5>
            </div>
            <div class="col-md-4">
                <a href="{{ route('image') }}">
                <img src="{{url('/images/camera1.jpeg')}}"class="img-thumbnail" alt="tiger"> 
                  <h5>
                      My Images
                  </h5>
            </div>
            <div class="col-md-4">
                  <a href="{{ route('contactpage') }}">
                  <img src="{{url('/images/community.png')}}" class="img-thumbnail" alt="tiger"> 
                      <h5>
                      Local Activities
                      </h5>
            </div>
       </div>
       <div class="row">
            <div class="col-md-4">
              <a href="{{ route('diary') }}">  
              <img src="{{url('/images/diary.jpg')}}" 
                class="img-thumbnail" alt="tiger">
                  <h5>
                  Mood Diary
                  </h5>
            </div>
            <div class="col-md-4">
              <a href="https:www.spotify.co.uk">  
              <img src="{{url('/images/spotify.png')}}" 
                class="img-thumbnail" alt="tiger">
                  <h5>
                  Spotify
                  </h5>
            </div>
        <div>
      </div>      
    </div>    
</body>



@stop