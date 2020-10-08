@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'Mood Diary'])
@stop
@section('content')
<body>
 
  {{--  <div class="card-body">
    <i class="far fa-address-book"></i> - use as card image
              <h2>
                {{ $diary->title}}
              </h2>
              

              <p>
                {{ $diary->date }}
              </p>
              <p>
                {{ $diary->comment}}
              </p>
      </div>
    --}}

  <div class="container">
        <div class="row">
          @foreach($diarys as $diary)
            <div class="col-md-3 ">
              <form action="{{route('diary', $diary)}}" method="POST">
                @csrf
                </div>
              </form>
            </div>
          @endforeach
        </div>   
    <br>
    <br>
    </div> 
  <div class="container">
  <form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Title">
    </div>
    <div class="col">
      <input type="integer" class="form-control" placeholder="Date">
    </div>
  </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" id="comment"></textarea>
     </div>
     <input type="submit" value="Submit!" >
  </form>
  </div>    
</div>
<body>
@endsection  