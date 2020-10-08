@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'My Contacts'])
@stop
@section('content')

<body id="my_img"> 
<div class="container">
    <div class= "row">
      <div class= "column-md-4">
        @foreach($contacts as $contact)
        <div class="card">
        <div style =color:black class="card-body">
         <h2>
            {{ $contact->firstname}}
          </h2>
          <p>
            {{ $contact->telephone }}
          </p>
        </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>


 
  <div id="contacts" class="container" >
    <h3>Add A Contact</h3>
      <form action="{{ route('contacts.store') }}" method="POST">
      @csrf
      @foreach ($errors->all() as $error)
      {{ $error }}<br/>
      @endforeach
      <div id="imageUpload">
        <div class="form-row">
          <div class="col">
            <input type="text" name="firstname" class="form-control"  placeholder="firstname">
          </div>
          <div class="col">
            <input type="text" name="lastname" class="form-control" placeholder="lastname">
          </div>
        </div>
        <div class="form-row">
          <div class="col">
            <input type="number" name="telephone" class="form-control" placeholder="telephone">
          </div>
          <div class="col">
            <input type="email" name="email" class="form-control" placeholder="email">
          </div>
        </div>
        <input type="submit" value="Submit!" >
      </form>
  </div>
  </div>
</body>


@endsection