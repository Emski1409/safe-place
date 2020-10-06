@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'My Images'])
@stop
@section('content')

<body id="my_img"> 
    <div class="container">
          <div class="row">
                <div class="col-md-3 ">
                  <img src="https://picsum.photos/200/300" class="img-thumbnail" alt="tiger"> 
                </div>
                <div class="col-md-3">
                  <img src="https://picsum.photos/200/300"class="img-thumbnail" alt="tiger">
                </div>
                <div class="col-md-3">
                    <img src="https://picsum.photos/200/300" class="img-thumbnail" alt="tiger"> 
                </div>
                <div class="col-md-3">
                  <img src="https://picsum.photos/200/300" class="img-thumbnail" alt="tiger"> 
                </div>
          </div>     

    <br>
    <br>
    </div> 

    <div id="imageUpload" class="container" >
      <h3>Add an Image</h3>
    <div class="panel panel-primary">

      <!-- <div class="panel-heading"><h2>Laravel 5.7 image upload example - HDTuto.com</h2></div> -->

    <div class="panel-body">

    @if ($message = Session::get('success'))

        <div class="alert alert-success alert-block">

            <button type="button" class="close" data-dismiss="alert">×</button>

                <strong>{{ $message }}</strong>

        </div>

        <img src="images/{{ Session::get('image') }}">

     @endif

    @if (count($errors) > 0)

        <div class="alert alert-danger">

             <strong>Whoops!</strong> There were some problems with your input.

              <ul>

                  @foreach ($errors->all() as $error)

                      <li>{{ $error }}</li>

                  @endforeach

              </ul>
        </div>
      @endif
        
      <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
      @csrf

        <div class="row">
            <div class="col-md-6">
              <input type="file" name="image" class="form-control">
            </div>

            <div class="col-md-6">
              <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>

      </form>



    </div>

</div>
</body>

@stop