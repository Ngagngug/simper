<div class="box box-primary">
  <div class="box-header with-border">
  <h3 class="box-title">Pendaftaran Baru</h3>
  </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
    <div class="box-body">                   
                       

                        <div class="form-group">
                        {{ Form::labelUIHorizontal('email', 'Email') }}
                          <div class="col-sm-10">
                        {{ Form::textUI('email', 'Masukan Email','fa fa-at') }}
                          </div>
                        </div><br><br>

                        <div class="form-group">
                          {{ Form::labelUIHorizontal('first_name', 'Nama Depan') }}
                          <div class="col-sm-10">
                        {{ Form::textUI('first_name', 'Masukan Nama Depan','fa fa-user') }}
                          </div>
                        </div><br><br>

                         <div class="form-group">
                          {{ Form::labelUIHorizontal('last_name', 'Nama Belakang') }}
                          <div class="col-sm-10">
                          {{ Form::textUI('last_name', 'Masukan Nama Belakang','fa fa-user') }}                     
                          </div>
                        </div><br><br>
 
   </div>
                      <div class="box-footer">
                          {{ Form::submitUI('Simpan') }}
                      </div>
</div>
