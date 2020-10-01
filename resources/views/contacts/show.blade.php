@extends('layouts.default')

@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'My Contacts'])
@endsection

@section('content') 

  <div class="container">
    <div class= "row">
      <div class= "column-md-4">

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
      </div>
    </div>
  </div>

@endsection