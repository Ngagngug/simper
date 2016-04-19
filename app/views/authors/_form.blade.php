  <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Pendaftaran</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                       <label for="name">Nama</label>
                       <input name="name" class="form-control" id="name" placeholder="Masukan Nama">
                    </div>   
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    {{ Form::submitUk('Simpan') }}
                  </div>
                </form>
              </div><!-- /.box -->