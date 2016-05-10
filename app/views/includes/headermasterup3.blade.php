 <!-- Logo -->
        <a href="{{ URL::to('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>SIP</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SIP</b> Boyolali</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../../assets/dist/img/doctor.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }} </span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../../assets/dist/img/doctor.png" class="img-circle" alt="User Image">
                    <p>
                      {{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }} - Administrator
                      <small>Last Login  {{ Sentry::getUser()->last_login }} </small>
                      <small>{{ Sentry::getUser()->last_login->diffForHumans() }}</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                       <a href="{{ URL::to('editpassword') }}" class="btn btn-default btn-flat">Password</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ URL::to('logout') }}" class="btn btn-default btn-flat">Logout</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
            <!--   <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li> -->
            </ul>
          </div>
        </nav>
