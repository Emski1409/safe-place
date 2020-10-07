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
              <form action="{{route('image.destroy', $image)}}" method="post">
                @csrf
                @method('DELETE')
                <div style="position:relative;">
                  <button type="submit" class="close AClass" style="z-index: 1; right: 0; position: absolute; color: red;">
                    <span>&times;</span>
                  </button>
                  <img src="{{ $image->path }}" class="img-thumbnail" alt="tiger" style="width: 100%;"> 
                </div>
              </form>
              <form action="{{route('image.put', $image)}}" method="post">
                @csrf
                @method('PUT')
                @if($image->favourited)
                <button class="btn btn-success">favourite</button>
                @else
                <button class="btn btn-secondary">favourite</button>
                @endif
              </form>
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

        <img src="images/{{ Session::get('image->path') }}">

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