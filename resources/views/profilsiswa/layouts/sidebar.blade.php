{{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            Blog Berita
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/tabungan*') ? 'active' : '' }}" href="/dashboard/tabungan">
            <span data-feather="dollar-sign"></span>
            Data Tabungan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/nabung*') ? 'active' : '' }}" href="/dashboard/nabung">
            <span data-feather="dribbble"></span>
            Mari Nabung
          </a>
        </li>
    </div>
</nav> --}}
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo text-decoration-none" href="dashboard">TABUNGAN SEKUL</a>
    <a class="sidebar-brand brand-logo-mini text-decoration-none" href="index.html">TS</a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src={{ asset("assets/images/faces/face15.jpg") }} alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal"></h5>
            <span>*insert status here*</span>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/profil">
        {{-- {{ Request::is('dashboard') ? 'active' : '' }} --}}
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="/tabungan">
        <span class="menu-icon">
          <i class="mdi mdi-table-large"></i>
        </span>
        <span class="menu-title">Tabungan</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a href="/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link" type="submit">
        <span class="menu-icon">
          <i class="mdi mdi mdi-logout"></i>
        </span>
          {{-- <button type="submit" class="nav-link px-3 bg-dark border-0">Logout<span data-feather="log-out"></span></a></button> --}}
        <span class="menu-title">Logout</span>
      </a>
      <form id="logout-form" action="/logout" method="post" style="display: none">
        @csrf
    </form>
    </li>
  </ul>
</nav>