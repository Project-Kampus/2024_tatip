<nav class="navbar navbar-expand-lg navbar-light bg-yellow pt-3 pb-0">
   <div class="container-fluid bg-gray-1 py-1">
      <!-- Logo Section -->
      <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}">
         <img src="{{ asset('assets/img/logo.png') }}" alt="logo" style="height: 40px;" class="me-2 rounded-circle">
         <div class="d-flex flex-column">
            <span class="fw-bold">RT.34</span>
            <span style="font-size: 13px;">Tegal Sari</span>
         </div>
      </a>

      <!-- Navbar Toggler for Mobile View -->
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="navbarContent">
         <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item">
               <a class="nav-link text-dark {{ Route::currentRouteName() === 'home' ? 'fw-bold ' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link text-dark {{ Route::currentRouteName() === 'tatip' ? 'fw-bold ' : '' }}" href="{{route('tatip')}}">Tata Tertib</a>
            </li>
            @if(Auth::check())
            <li class="nav-item">
               <a class="nav-link text-dark {{ request()->routeIs('admin.*') ? 'fw-bold ' : '' }}" href="{{route('admin.umum')}}">Admin</a>
            </li>
            @endif
         </ul>
         @if(!Auth::check())
         <a href="{{route('login')}}" class="btn btn-green ms-0 ms-lg-2 ">Masuk</a>
         @else
         <form action="{{ route('actionlogout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-green ms-0 ms-lg-2">Keluar</button>
         </form>
         @endif
      </div>
   </div>
</nav>