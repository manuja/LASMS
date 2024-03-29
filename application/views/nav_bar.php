<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="<?php echo base_url('/index.php/home/index') ?>" class="brand-link">
    <img src="<?php echo base_url('/assets/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">M.D Peris</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('/assets/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">SLMS-Colombo</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-item has-treeview menu-open">
          <a href="<?php echo base_url('/index.php/home/index') ?>" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="assets/pages/widgets.html" class="nav-link">
            <i class="nav-icon fas fa-user-friends"></i>
            <p>
              HRM Module
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('/index.php/customer/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Customer/Detters Reg.</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('/index.php/login/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Login</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('/index.php/suppliers/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Supplier/Credioters Reg.</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('/index.php/user/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>User Registration</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
            <p>
              Depters Transactions
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('/index.php/invoice/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Generate Invoice</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Invoice Cancelation</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Item Return</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('/index.php/deptors_payment/index')?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Depter Payments Mgt.</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-bar"></i>
            <p>
              Creditors Transactions
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Issue a Voucher</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cancel a Voucher</p>
              </a>
            </li>
            <li class="nav-item">
             <a href="<?php echo base_url('/index.php/Creditors_Payment/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Creditor Payments Mgt.</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-layer-group"></i>
            <p>
              SMM - Stock Mgt
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('/index.php/units/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Units Mapping</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('/index.php/stockin/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Stock In</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('/index.php/stock_out/index') ?>" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Stock Out</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo base_url('/index.php/stock_return/index')?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Stock Return</p>
                </a>
              </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="<?php echo base_url('/index.php/item/index') ?>" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
              Items Registration
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-pdf"></i>
            <p>
              Report Module
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-save"></i>
            <p>
              Data backup module
            </p>
          </a>
        </li>




          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>


