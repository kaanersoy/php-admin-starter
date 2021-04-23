<?php $view = $_GET["view"] ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <!-- <a href="../../index3.html" class="brand-link">
    <span class="brand-text font-weight-light">Brand</span>
  </a> -->

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> -->

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item menu-open">
          <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Pages
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <?php
            $directory = "./views/";
            $files = array_diff(scandir($directory), array('..', '.', "404.php"));
            foreach ($files as $file) {
              $file = str_replace(".php", "", $file);
              $path = $file;
              $file = explode('-', $file);
              $file = implode(" ", $file);
              $file = ucwords($file);
            ?>
              <li class="nav-item">
                <a href="<?php echo ("{$website_domain}v.php?view={$path}") ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p><?php echo $file ?></p>
                </a>
              </li>
            <?php
            }
            ?>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>