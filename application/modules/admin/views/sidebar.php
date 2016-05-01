 <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url("assets/dist/img/avatar5.png")?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Administrator</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
              <a href="<?=base_url("admin")?>">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Tables</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url("admin/table_simple")?>"><i class="fa fa-circle-o"></i>Orderlist</a></li>
                <li><a href="<?=base_url("admin/table_data")?>"><i class="fa fa-circle-o"></i>Otherlist</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="<?=base_url("admin/update_menu")?>">
                <i class="fa fa-edit"></i> <span>Update Menu</span>
              </a>
            </li>
            <li>
              <a href="<?=base_url("admin/mailbox")?>">
                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                <small class="label pull-right bg-yellow">12</small>
              </a>
            </li>
   </aside>