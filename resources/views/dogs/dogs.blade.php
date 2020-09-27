<html>
<head>
   <head>
    <body>
    <h1>{{ $num }} Dogs</h1>
    @if ($num <= $max){
      @for ($i = 0; $i < $num; $i++)
        <img src="https://www.zooplus.co.uk/magazine/wp-content/uploads/2018/01/Female-Dogs-in-Heat-768x512.jpeg"alt="">
    @endfor

    @else
        <h3> too many dogs</h3>
    @endif

    }
 
    </body>
<html>