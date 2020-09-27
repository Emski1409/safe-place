<!doctype html>
<html>
    <head>
      @include('includes.head')
    </head>
    <body>
        <div class="container-fluid"> 
          @include('includes.nav')
          <header class="row">
              
         </header>
          @yield('jumbo')
          <div id="main" class="row">
                  @yield('content')
          </div>
        </div>
    </body>
</html>