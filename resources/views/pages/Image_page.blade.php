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
  <h3>Add An Image</h3>
  <div class="input-group mb-3">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile02">
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
  <div class="input-group-append">
    <span class="input-group-text" id="">Upload</span>
  </div>
</div>
</div>
</body>

@stop