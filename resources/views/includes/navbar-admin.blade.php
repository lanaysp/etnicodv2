<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
           <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
        <form class="form-inline mr-auto">

        </form>
        <ul class="navbar-nav navbar-right">

          <li class="dropdown"><a href="" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="/assets/img/admin/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Admin</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="l" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="{{ route('logout') }}"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
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
            <a href="{{ route('home') }}">Admin Panel</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">ETC</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Admin</li>
               <li class="{{ (request()->is('admin')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin-dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>

                <li class="nav-item dropdown {{ (request()->is('admin/blog')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-newspaper"></i> <span>Blog</span></a>
                <ul class="dropdown-menu">

                   <li class="{{ (request()->is('admin/blogcategory')) ? 'active' : '' }}"><a class="nav-link " href="{{ route('blogcategory.index') }}"><i class="fas fa-tags"></i> <span>Blog Category</span></a></li>

                   <li class="{{ (request()->is('admin/blog')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('blog.index') }}"><i class="far fa-newspaper"></i> <span>Blog</span></a></li>

                </ul>
              </li>




               <hr>
               <li class="{{ (request()->is('admin/suport')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('suport.index') }}"><i class="fas fa-code-branch"></i> <span>Suport</span></a></li>
               <li class="{{ (request()->is('admin/portfolio')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('portfolio.index') }}"><i class="far fa-bookmark"></i></i> <span>Portfolio</span></a></li>
               <li class="{{ (request()->is('admin/team')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('team.index') }}"><i class="fas fa-address-card"></i></i> <span>Team</span></a></li>
               <hr>
               <li class="{{ (request()->is('admin/newsletter')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('newsletter.index') }}"><i class="fas fa-envelope-open-text"></i></i> <span>Newsletter</span></a></li>

               <hr>
                @php
                    $item = DB::select('select * from billing where status');
                @endphp
                @if ($item != null)

                <li class="nav-item dropdown {{ (request()->is('admin/blog')) ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-id-card"></i> <span>Layanan</span></a>
                @else
                @endif
                <ul class="dropdown-menu">

                   <li class="{{ (request()->is('admin/blogcategory')) ? 'active' : '' }}"><a class="nav-link " href="{{ route('layanan.index') }}"> <span>Acc Client</span></a></li>


                </ul>
              </li>
               <li><a target="_blank" class="nav-link" href="https://dashboard.tawk.to/?lang=id#/dashboard/606c1671067c2605c0bf991f"><i class="fas fa-headset"></i></i> <span>Chat Support</span></a></li>

               <li><a class="nav-link" href="/dashboard/logout"><i class="fas fa-sign-out-alt"></i></i> <span>Out</span></a></li>

        </aside>
      </div>
