@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'My Images'])
@endsection
@section('content')

<body id="my_img"> 
    <div class="container">
          <div class="row">
            @foreach($images as $image)
                <div class="col-md-3 ">
                  <img src="{{ $image->path }}" class="img-thumbnail" alt="tiger"> 
                </div>
            @endforeach
          </div>   
    <br>
    <br>
    </div> 


    <div id="imageUpload" class="container" >
      <h3 id="imageadd">Add an Image</h3>
    <div class="panel panel-primary">

    

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
        
      <form action="{{ route('image.path') }}" method="POST" enctype="multipart/form-data">
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

@endsection