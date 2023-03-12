<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="{{ route('admin.') }}"> <img alt="image" src="/admin/assets/img/logo.png" class="header-logo" /> <span
            class="logo-name">Otika</span>
        </a>
      </div>
      <ul class="sidebar-menu">
        <li class="menu-header">Main</li>
        <li class="dropdown ">
          <a href="{{ route('admin.') }}" class="nav-link"><i data-feather="monitor"></i><span>Dashboard</span></a>
        </li>
        <li class="dropdown">
          <a href="{{ route('admin.categories.index') }}" class="nav-link"><i
              data-feather="monitor"></i><span>Categories</span></a>
        </li>
        <li class="dropdown">
            <a href="{{ route('admin.posts.index') }}" class="nav-link"><i
                data-feather="monitor"></i><span>Posts</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.tags.index') }}" class="nav-link"><i
                data-feather="monitor"></i><span>Tags</span></a>
          </li>
          <li class="dropdown">
            <a href="{{ route('admin.ads.index') }}" class="nav-link"><i
                data-feather="monitor"></i><span>Advertising</span></a>
          </li>
      </ul>
    </aside>
  </div>
