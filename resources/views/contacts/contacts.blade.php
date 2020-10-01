@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'My Contacts'])
@stop
@section('content')

<body id="my_img"> 
  {{--  <div class="card-body">
              <h2>
                {{ $contact->firstname}}
              </h2>
              

              <p>
                {{ $contact->Telephone }}
              </p>
      </div>
    --}}



  <div id="contacts" class="container" >
    <h3>Add A Contact</h3>
      <form action="{{ route('contacts.store') }}" method="POST">
      @csrf
        <div class="form-row">
          <div class="col">
            <input type="text" name="firstname" class="form-control" placeholder="firstname">
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
</body>


@endsection