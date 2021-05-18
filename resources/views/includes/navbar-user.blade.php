<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
           <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
        <form class="form-inline mr-auto">

        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="/assets/img/admin/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ route('home') }}">
                <img src="/images/03.png" alt="" style="width: 50%">
            </a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">ETC</a>
          </div>
          <ul class="sidebar-menu mt-5">
              <li class="menu-header">User</li>

            <li class="{{ (request()->is('dashboard')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li class="{{ (request()->is('product')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('product') }}"><i class="fas fa-box-open"></i> <span>Services</span></a></li>
            @php
                $item = DB::select('select * from billing where status');
            @endphp
            @if ($item != null)
            <li class="{{ (request()->is('billing')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('billing') }}"><i class="fas fa-wallet"></i> <span>Billing</span></a></li>
            @else

            @endif
               <hr>
                <li>
                   <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="nav-link">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                </li>
             <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="{{ route('bundle') }}" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-shopping-basket"></i> Beli Layanan lain
              </a>
            </div>
        </aside>

        </aside>
      </div>
