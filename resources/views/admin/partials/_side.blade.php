<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/images/logo_web.png')}}" alt="AdminLTE Logo" class="brand-image"
           style=" height : 800px; weight:70px;">
      <span class="brand-text font-weight-light">PRINCE IPB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/admin/dist/img/profile-photo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::User()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user-o"></i>
              <p>
                User
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.create_user') }}" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Create user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.manage_user') }}" class="nav-link">
                  <i class="fa fa-cog nav-icon"></i>
                  <p>Manage user</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dropbox"></i>
              <p>
                Product
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.create_product') }}" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Add product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.manage_product') }}" class="nav-link">
                  <i class="fa fa-cog nav-icon"></i>
                  <p>Manage product</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-shopping-cart"></i>
              <p>
                Transaction
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.payment') }}" class="nav-link">
                  <i class="fa fa-money nav-icon"></i>
                  <p>Payment</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.shipping') }}" class="nav-link">
                  <i class="fa fa-archive nav-icon"></i>
                  <p>Shipping</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.completed') }}" class="nav-link">
                  <i class="fa fa-check nav-icon"></i>
                  <p>Completed order</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
