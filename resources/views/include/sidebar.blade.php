<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('logo_petang.jpeg')}}" alt="Petang" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SMA N 1 Petang</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Username</a>
        </div>
      </div>
      <!-- SidebarSearch Form -->
      <div class="form-inline">
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fas fa-home"></i>
              <p>
                Dashboard   
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fas fa-envelope-open-text"></i>
              <p>
                Arsip Surat Masuk   
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fas fa-envelope-square"></i>
              <p>
                Arsip Surat Keluar   
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('disposisi.index')}}" class="nav-link">
              <i class="fas fa-terminal"></i>
              <p>
                Surat Disposisi
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{route('kategori.index')}}" class="nav-link">
              <i class="fas fa-list-alt"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fas fa-user-plus"></i>
              <p>
                Register User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>