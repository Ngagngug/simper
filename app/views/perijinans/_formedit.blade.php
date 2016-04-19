  <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Perijinan</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">
                    <div class="form-group">
                       <label for="nama">Nama Perijinan</label>
                       <input name="nama" class="form-control" id="nama" placeholder="Masukan Nama Perijinan" value="{{ $perijinan->nama }}">
                    </div>   
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    {{ Form::submitUk('Simpan') }}
                  </div>
                </form>
              </div><!-- /.box -->