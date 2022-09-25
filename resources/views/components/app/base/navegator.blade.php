<div>
    <!-- Well begun is half done. - Aristotle -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            
          <h1 class="logo">
            <img src="front/logo.png" alt="" width="40px">
            <a href="/">{{ config('app.name', 'Laravel') }}</a></h1>
          <!-- Uncomment below if you prefer to use an image logo y nav -->
          <nav id="navbar" class="navbar">
            <ul>
                @foreach ($menu_navs as  $menu)
                <li><a class="nav-link scrollto {{$menu->clase}}" href="{{$menu->url}}">{{$menu->name}}</a></li>
                @endforeach
                <!-- submenu navigator EN -->
                <x-app.base.ComNavegatorsubmenu></x-app.base.ComNavegatorsubmenu>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
    
        </div>
      </header><!-- End Header -->
</div>