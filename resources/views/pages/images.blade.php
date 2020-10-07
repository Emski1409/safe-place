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
                  <form action="{{route('image.destroy', $image)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type='submit' class="btn btn-danger delete_user" action="delete" id="{{$image->path}}">
                    <button>Favourite</button>
                  </form>

                </div>
            @endforeach
          </div>   
    <br>
    <br>
    </div> 
      <script>
        window.onload=function(){
              document.getElementById("{{$image->path}}").addEventListener("click", deleteRequest);

            function deleteRequest(){
              let xhr = new XMLHttpRequest();

              xhr.open("DELETE", "{{route('image.destroy', $image)}}");
              xhr.setRequestHeader('X-CSRF-TOKEN', "{{csrf_token()}}");

              xhr.onreadystatechange = function () {
              if (xhr.readyState === 4) {
                  window.location.replace("{{route('image.path')}}");
              }
              }
              xhr.send();

  }
}

      // $('.delete_user').click(function(){
      //   if( confirm('Are you sure?') )
      //   {
      //     var id = $(this).attr('id');
      //     // Make an ajax call to delete the record and pass the id to identify the record
      //   }
      // });
</script>

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