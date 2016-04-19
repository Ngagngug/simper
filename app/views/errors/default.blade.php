@extends('layouts.guest')

@section('header')
  
   <!-- Logo -->
        <a href="{{ URL::to('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>Sip</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>SIP</b> Boyolali</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
         
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="assets/dist/img/doctor.png" class="user-image" alt="User Image">
                  <span class="hidden-xs">User Login</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="assets/dist/img/doctor.png" class="img-circle" alt="User Image">
                    <p>
                      Sistem Informasi Perizinan
                      <small>Boyolali, Maret 2016</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                      <div class="col-xs-12 text-center">
                      <a href="{{ URL::to('login') }}" class="btn btn-default btn-flat">Login</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>

@stop

@section('content')


        <!-- Main content -->
        <section class="content">
          <div class="error-page">
            <h2 class="headline text-yellow"> 404</h2>
            <div class="error-content">
              <h3><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h3>
              <p>
                We could not find the page you were looking for.
                Meanwhile, you may <a href="../../index.html">return to dashboard</a> or try using the search form.
              </p>
            
            </div><!-- /.error-content -->
          </div><!-- /.error-page -->
        </section><!-- /.content -->
      

@stop

