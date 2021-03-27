<nav class="nav-menu d-none d-lg-block ml-auto">
        <ul>
          <li class="{{ Nav::isRoute('home') }}"><a href="/">Home</a></li>
          <li><a href="/#about">About</a></li>
          <li><a href="/#services">Services</a></li>
          <li class="{{ Nav::isRoute('portfolio') }}"><a href="{{ route('portfolio') }}">Portfolio</a></li>
          <li><a href="/#team">Team</a></li>
          <li class="{{ Nav::isRoute('blog') }}"><a target="_blank" rel="noopener noreferrer" href="/blog">Blog</a></li>
          <li><a href="/#contact">Contact</a></li>
          @guest
            <li><a class="d-lg-none d-sm-inline-block" href="{{ route('login') }}">Masuk</a></li>
            <li><a class="d-lg-none d-sm-inline-block" href="{{ route('register') }}">Daftar</a></li>
          @endguest
        </ul>
      </nav><!-- .nav-menu -->

          @guest
          <div class="d-none d-sm-block">
              <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{ route('login') }}" class="btn get-started-btn">Masuk</a>
                <a href="{{ route('register') }}" class="btn get-started-btn">Daftar</a>
              </div>
          </div>
            @endguest

        @auth
        @if ( Auth::user()->id != 1)
            <a href="{{ route('dashboard') }}" class="get-started-btn text-uppercase"><i class="bx bx-user"></i> {{ Auth::user()->name }}</a>
        @else
            <a href="{{ route('admin-dashboard') }}" class="get-started-btn text-uppercase"><i class="bx bx-user"></i> {{ Auth::user()->name }}</a>
        @endif

        @endauth

    </div>
  </header><!-- End Header -->
