@extends('layouts.default')

@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'My Contacts'])
@endsection

@section('content') 
  {{$contacts}}
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

@endsection