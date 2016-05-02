@section('header')
  
   <!-- Logo -->
        <a href="{{ URL::to('/') }}" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>SIP</b></span>
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
                  <span class="hidden-xs">Login User</span>
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
            </ul>
          </div>
        </nav>

@stop

@section('content')

<div class="login-box">
      <div class="login-logo">
        <a href="{{ URL::to('/') }}"><b>SIP</b> Boyolali</a>
      </div><!-- /.login-logo -->
      <center>
      <img src="assets/dist/img/doctorbag.png" width="150" height="150">
      </center>  
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>
        @include('layouts.partials.alert')
         {{ Form::open(array('url' => '/authenticate')) }}
          <div class="form-group has-feedback">
            {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email' ,'data-toggle'=>'tooltip',
  'data-placement'=>'bottom', 'title'=>'This is the email field' )) }}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
            <div class="form-group has-feedback">
            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password' ,'data-toggle'=>'tooltip',
  'data-placement'=>'bottom', 'title'=>'This is password field')) }}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-12">
              {{ Form::submit('Login', array('class'=>'btn btn-primary btn-block btn-flat')) }}
            </div><!-- /.col -->
          </div>
        {{ Form::close() }}

        <a href="{{ URL::to('forgot') }}">Lupa Password</a><br>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

@stop

@section('footer')

 <footer class="main-footer2">
        
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016-2017 <a href="http://almsaeedstudio.com">Sistem Informasi Perizinan</a>.</strong> All rights reserved.

</footer>

@stop