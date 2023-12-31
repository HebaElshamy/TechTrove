<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset("assets/")}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->




        <li class="nav-item">
          <a href="{{route('home')}}" class="nav-link">
            <i class="nav-icon fas fa-tree"></i>
            <p>Home</p>
          </a>
        </li>
        <li class="nav-header">Compounant</li>
        <li class="nav-item">
          <a href="{{route('all.category')}}" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Categories
            </p>
          </a>
        </li>

        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Products
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('all.product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('add.product')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Product</p>
                </a>
              </li>

            </ul>
        </li>
        <li class="nav-header">Stock Management</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Stock
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('inventory.management')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>All Stock</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('all.suppliers')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Suppliers</p>
                </a>
              </li>

            </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
