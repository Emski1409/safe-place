@extends('layouts.default')
@section('jumbo')
  @include('widgets.jumbo', ['message' => 
    'Mood Diary'])
@stop
@section('content')
<body id="my_img">

  <div class="container">
        <div class="row">
          @foreach($diarys as $diary)
          <form action="{{route('diary.destroy', $diary)}}" method="post">
                @csrf
                @method('DELETE')
                <div style="position:relative;">
                  <button type="submit" class="close AClass" style="z-index: 1; right: 0; position: absolute; color: red;">
                    <span>&times;</span>
                  </button>
                  <div class="card-body">
                    <h2>
                      {{ $diary->Title }}
                    </h2>
                    <p>
                      {{ $diary->date }}
                    </p>
                    <p>
                      {{ $diary->Comment }}
                    </p>
                  </div>
                </div>
              </form>
          @endforeach
        </div>   
    <br>
    <br>
    </div> 
  <div class="container">
  <form action="{{route('diary')}}" method="post">
    @csrf
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Title" name="title">
    </div>
    <div class="col">
      <input type="integer" class="form-control" placeholder="Date" name="date">
    </div>
  </div>
    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
     </div>
     <input type="submit" value="Submit!" >
  </form>
  </div>    
</div>
<body>
@endsection  