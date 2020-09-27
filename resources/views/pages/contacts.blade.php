@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'My Contacts'])
@stop
@section('content')

<body id="my_img"> 
<div class="container">
      <div class="row">
            <div class="col-md-3 ">
              <img src="https://picsum.photos/200/300" class="img-thumbnail" alt="tiger"> 
                <h5>
                    Contact Name
                </h5>
                 <p>Telephone and email</p>
            </div>
            <div class="col-md-3">
              <img src="https://picsum.photos/200/300"class="img-thumbnail" alt="tiger"> 
                 <h5>
                    Contact Name
                </h5>
                <p>Telephone and email</p>
            </div>
            <div class="col-md-3">
                <img src="https://picsum.photos/200/300" class="img-thumbnail" alt="tiger"> 
                    <h5>
                    Contact Name
                    </h5>
                <p>Telephone and email</p>
            </div>
            <div class="col-md-3">
              <img src="https://picsum.photos/200/300" class="img-thumbnail" alt="tiger"> 
                 <h5>
                 Contact Name
                </h5>
               <p>Telephone and email</p>
            </div>
      </div>     

<br>
<br>
</div> 

<div id="contacts" class="container" >
  <h3>Add A Contact</h3>
    <form action="{{ route('contacts') }}" method="POST">
      <div class="form-row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>
      <div class="form-row">
        <div class="col">
          <input type="number" class="form-control" placeholder="Telephone">
        </div>
        <div class="col">
          <input type="email" class="form-control" placeholder="Email">
        </div>
      </div>
      <input type="submit" value="Submit!" >
    </form>
</div>
</body>

@stop