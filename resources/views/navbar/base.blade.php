<nav class="navbar navbar-expand-lg bg-warning" style="box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="/"><h1>Cheap Talk</h1></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              @guest
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="{{ route('register') }}">Register</a>
                </li>
              @else
                <li class="nav-item">
                  <a class="nav-link text-light" href="/posts">Posts</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="/categories">Categories</a>
                </li>
                <div class="dropdown">
                    @if(auth()->check())
                      <button class="btn btn-outline-light dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i> {{ auth()->user()->name }}
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="userDropdown">
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                      </ul>
                    @endif
                  </div>
              @endguest
            </ul>
          </div>
        </div>
      </nav>

<style>
.raise{
    border-radius: 50px;
    border:2px solid yellow;
    transition: 0.2s;
    box-shadow: 0px 0px 0px 0px black
}
.raise:hover,.raise:focus {
    box-shadow: 0px 5px 3px 0px rgba(0, 0, 0, 0.527);
    transform: translateY(-0.25em);
}
.raise2{
    border-radius: 50px;
    border:2px solid rgb(190, 211, 0);
    transition: 0.2s;
    box-shadow: 0px 0px 0px 0px black
}

.raise2:hover, .raise2:focus{
    box-shadow: 0px 5px 3px 0px rgba(0, 0, 0, 0.527);
    transform: translateY(-0.25em);
}

.raise3{
    border-radius: 50px;
    border:2px solid rgb(190, 211, 0);
    transition: 0.2s;
    box-shadow: 0px 0px 0px 0px black
}

.raise3:hover, .raise3:focus{
    box-shadow: 0px 5px 3px 0px rgba(0, 0, 0, 0.527);
    transform: translateY(-0.25em);
}





</style>
