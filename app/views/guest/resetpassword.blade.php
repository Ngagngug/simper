@extends('layouts.guest')

@section('content')
     <div class="login-logo">
        <a href="{{ URL::to('/') }}"><b>SIP</b> Boyolali</a>
      </div><!-- /.login-logo -->
      <center>
      <img src="assets/dist/img/doctorbag.png" width="150" height="150">
      </center>  
      <div class="login-box-body">
        <p class="login-box-msg">Masukan Password Baru</p>
        @include('layouts.partials.validationbootstrap')  

        {{ Form::open(array('url' => route('guest.storenewpassword'), 'method'=>'post', 'class' => 'box-body')) }}
{{-- 
            <div class="form-group">
                {{ Form::labelUI('password', 'Password') }}
                <div class="uk-form-controls">
                    {{ Form::password('password', array('placeholder'=>'*********')) }}
                </div>
            </div> --}}

            <div class="form-group has-feedback">
            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password' ,'data-toggle'=>'tooltip',
              'data-placement'=>'bottom', 'title'=>'This is password field')) }}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

            <div class="form-group has-feedback">
            {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Password Konfirmasi' ,'data-toggle'=>'tooltip',
              'data-placement'=>'bottom', 'title'=>'This is password confirmation field')) }}
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>

           

            <div class="form-group has-feedback">
                {{ Form::hidden('email', $email) }}
                {{ Form::hidden('resetCode', $resetCode) }}
            </div>


            <div class="login-box-footer">
                {{ Form::submit('Reset', array('class'=>'btn btn-primary btn-block btn-flat')) }}
            </div>
        {{ Form::close() }}

        </div><!-- /.login-box-body -->
@stop