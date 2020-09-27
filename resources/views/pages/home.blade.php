@extends('layouts.default')

@section('content')
<body>


    <div class="container-fluid">
          <img src="/images/beach.jpg" class="img-fluid" alt="Responsive image">  
          <div class="centered">My Safe Place
            <br>
            <button type="button" class="btn btn-secondary btn-lg"><a href="{{ route('general') }}">Find out more</a></button>
          </div>
    </div>

</body>

@stop