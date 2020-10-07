


        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand " href="{{ route('homepage') }}"> MSP</a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ route('register') }}">Sign Up <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Log In</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('personal') }}">My Page</a>
                  <a class="dropdown-item" href="{{ route('contactpage') }}">Contacts</a>
                  <a class="dropdown-item" href="{{ route('image') }}">My Images</a>
                  <a class="dropdown-item" href="{{ route('general') }}">Get Help</a>
                  <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>
                  <a class="dropdown-item" href="#">Local Resources</a>
                </div>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </nav>
     
