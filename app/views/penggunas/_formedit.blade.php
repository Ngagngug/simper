  <div class="box box-primary">
  <div class="box-header with-border">
  <h3 class="box-title">Pendaftaran Baru</h3>
  </div><!-- /.box-header -->
    <!-- form start -->
    <form role="form">
    <div class="box-body">
                         <div class="form-group">
                         <label>Kategori Perizinan</label>
                         <div class="input-group">
                          <div class="input-group-addon">
                          <i class="fa fa-briefcase"></i>
                        </div>

                         {{ Form::select('perijinan_id', array(''=>'')+Perijinan::lists('nama','id'), null, array(
                        'id'=>'perijinan_id',
                        'placeholder' => "Pilih Perijinan",
                        'class' => "form-control select2")) }}

                        </div><!-- /.input group -->
                        </div><!-- /.form-group -->

                        <div class="form-group">
                          {{ Form::labelUI('lokasi', 'Nama Lokasi Perizinan') }}
                          {{ Form::textUI('lokasi', 'Masukan Lokasi Perizinan','fa fa-home') }}
                        </div>

                        <div class="form-group">
                          {{ Form::labelUI('nama', 'Nama Lengkap') }}
                          {{ Form::textUI('nama', 'Masukan Nama Lengkap','fa fa-user') }}
                        </div>

                        <div class="form-group">
                          {{ Form::labelUI('noktp', 'Nomor KTP') }}
                          {{ Form::textUI('noktp', 'Masukan Nomor KTP','fa fa-pencil-square-o') }}                     
                        </div> 

                        <div class="form-group">
                           <label for="berlaku">KTP Berlaku s.d. </label>
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input value="{{ $pengguna->berlaku }}" name="berlaku" type="text" class="form-control" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
                        </div><!-- /.input group -->
                        </div> 

                        <div class="form-group">
                          {{ Form::labelUI('tempatlahir', 'Tempat Lahir') }}
                          {{ Form::textUI('tempatlahir', 'Masukan Tempat Lahir','fa fa-street-view') }}
                        </div> 

                        <div class="form-group">
                           <label for="tanggallahir">Tanggal Lahir </label>
                            <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                          </div>
                          <input value="{{ $pengguna->tanggallahir }}" name="tanggallahir" type="text" class="form-control" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
                        </div><!-- /.input group -->
                        </div> 
        
                       <div class="form-group">
                        <label>Jenis Kelamin</label>
                           <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-venus-mars"></i>
                          </div>
                          <select name="jeniskelamin" class="form-control select2" style="width: 100%;">
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                        </div><!-- /.input group -->
                      </div><!-- /.form-group -->

                      <div class="form-group">
                         {{ Form::labelUI('pekerjaan', 'Pekerjaan') }}
                         {{ Form::textUI('pekerjaan', 'Masukan Pekerjaan','fa fa-user-md') }}                       
                      </div> 

                      <div class="form-group">
                         {{ Form::labelUI('provinsi', 'Provinsi') }}
                         {{ Form::textUI('provinsi', 'Masukan Provinsi','fa fa-file') }}                                        
                      </div> 

                      <div class="form-group">
                         {{ Form::labelUI('kabupaten', 'Kota/Kabupaten') }}
                         {{ Form::textUI('kabupaten', 'Masukan Kota/Kabupaten','fa fa-file-text') }}                     
                      </div> 

                      <div class="form-group">
                         {{ Form::labelUI('kecamatan', 'Kecamatan') }}
                         {{ Form::textUI('kecamatan', 'Masukan Kecamatan','fa fa-file-text') }}                                        
                      </div> 

                       <div class="form-group">
                         {{ Form::labelUI('desa', 'Desa / Kelurahan') }}
                         {{ Form::textUI('desa', 'Masukan Desa / Kelurahan','fa fa-file-text') }}                                        
                      </div> 

                      <div class="form-group">
                         {{ Form::labelUI('alamat', 'Alamat Sesuai KTP') }}
                         {{ Form::textUI('alamat', 'Masukan Alamat Sesuai KTP','fa fa-road') }}         
                      </div> 

                      <div class="form-group">                     
                           {{ Form::labelUI('kodepos', 'Kode Pos') }}
                           {{ Form::textUI('kodepos', 'Masukan Kode Pos','fa fa-newspaper-o') }}                                
                      </div>

                      <div class="form-group">                     
                           {{ Form::labelUI('nohp', 'Nomor Handphone') }}
                           {{ Form::textUI('nohp', 'Masukan Nomor Handphone','fa fa-phone-square') }}                                  
                      </div>

                      <div class="form-group">                     
                           {{ Form::labelUI('email', 'Email') }}
                           {{ Form::textUI('email', 'Masukan Email','fa fa-at') }}                                  
                      </div>
                      
                       <div class="form-group">
                        <label>Verifikasi</label>
                           <div class="input-group">
                            <div class="input-group-addon">
                            <i class="fa fa-pencil-square-o"></i>
                          </div>
                          <select name="verifikasi" class="form-control select2" style="width: 100%;">
                          <option>Proses Verifikasi</option>
                        </select>
                        </div><!-- /.input group -->
                      </div><!-- /.form-group -->
      </div>
                      <div class="box-footer">
                          {{ Form::submitUI('Simpan') }}
                      </div>
</div>

<script>
    $(document).ready(function() {
        $("#perijinan_id").select2();
    });
</script>