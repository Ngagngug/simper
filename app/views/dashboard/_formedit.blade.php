<div class="box box-primary">
  <div class="box-header with-border">
  <h3 class="box-title">Ubah Password</h3>
  </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
    <div class="box-body">                   
                       

                        <div class="form-group">
                        {{ Form::labelUIHorizontal('Password Lama', 'Password Lama') }}
                          <div class="col-sm-10">
                        {{ Form::passwordUI('oldpassword','******','fa fa-asterisk') }}
                          </div>
                        </div><br><br>

                        <div class="form-group">
                          {{ Form::labelUIHorizontal('Password Baru', 'Password Baru') }}
                          <div class="col-sm-10">
                        {{ Form::passwordUI('newpassword','******','fa fa-asterisk') }}
                          </div>
                        </div><br><br>

                        <div class="form-group">
                          {{ Form::labelUIHorizontal('Konfirmasi Password Baru', 'Konfirmasi Password Baru') }}
                          <div class="col-sm-10">
                        {{ Form::passwordUI('newpassword_confirmation','******','fa fa-asterisk') }}
                          </div>
                        </div><br><br>
 
   </div>
                      <div class="box-footer">
                          {{ Form::submitUI('Simpan') }}
                      </div>
</div>