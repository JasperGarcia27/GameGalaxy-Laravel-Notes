<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container">
    {{-- left side --}}
    <div class="collapse navbar-collapse order-lg-1 order-3" id="navbarSupportedContent">  
       <ul class="navbar-nav me-auto ">
        @guest
            <li class="nav-item">
              <a class="nav-link text-light" href="/">Home</a>
            </li>
        @else
            <li class="nav-item">
              <a class="nav-link text-light" href="/">Home</a>
            </li>
            @if(Auth::user()->isSeller == 1)
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/products">View Products</a></li>
                  <li><a class="dropdown-item" href="/products/addProduct">Add New Products</a></li>
                  <li><a class="dropdown-item" href="/myProducts">My Products</a></li>
                </ul>
              </li>
            
            @else 
              <li class="nav-item">
                <a class="nav-link text-light" href="/products">Products</a>
              </li>
            @endif


        @endguest
    </ul>
    </div>
    
    <a class="navbar-brand order-1" href="/">
      <span class="text-light">
        Game <img src="{{asset('/images/icon/logo.png')}}" style="height: 30px" alt="logo"> Galaxy
      </span>
    </a>

    <button class="navbar-toggler bg-white order-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    {{-- right side --}}
    <div class="collapse navbar-collapse order-3 order-lg-4" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/profile">Profile</a>
                  <a class="dropdown-item" href="/update-profile">Update Profile</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>