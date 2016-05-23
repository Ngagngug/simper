<div class="box box-primary">
  <div class="box-header with-border">
  <h3 class="box-title">Pendaftaran Baru</h3>
  </div><!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal">
    <div class="box-body">                   
                        <div class="form-group">
                          <label class="col-sm-2 control-label">Kategori Perizinan</label>
                          <div class="col-sm-10">
                           <div class="input-group">
                              <div class="input-group-addon">
                              <i class="fa fa-briefcase"></i>
                            </div>
                              {{ Form::select('perijinan_id', array(''=>'')+Perijinan::lists('nama','id'), null, array(
                            'id'=>'perijinan_id',
                            'placeholder' => "Pilih Perijinan",
                            'class' => "form-control select2")) }}
                          </div>
                           </div><!-- /.input group -->
                        </div> <br><br>

                        <div class="form-group">
                        {{ Form::labelUIHorizontal('Lokasi', 'Nama Lokasi Perizinan') }}
                          <div class="col-sm-10">
                        {{ Form::textUI('lokasi', 'Masukan Lokasi Perizinan','fa fa-home') }}
                          </div>
                        </div><br><br>

                        <div class="form-group">
                          {{ Form::labelUIHorizontal('Nama', 'Nama Lengkap') }}
                          <div class="col-sm-10">
                        {{ Form::textUI('nama', 'Masukan Nama Lengkap','fa fa-user') }}
                          </div>
                        </div><br><br>

                         <div class="form-group">
                          {{ Form::labelUIHorizontal('No KTP', 'Nomor KTP') }}
                          <div class="col-sm-10">
                          {{ Form::textUI('noktp', 'Masukan Nomor KTP','fa fa-pencil-square-o') }}                     
                          </div>
                        </div><br><br>
 
                       <div class="form-group">
                          <label class="col-sm-2 control-label">KTP Berlaku s.d. </label>
                          <div class="col-sm-10">
                           <div class="input-group">
                              <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                             <input name="berlaku" type="text" class="form-control" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
                          </div>
                           </div><!-- /.input group -->
                        </div> <br><br>

                         <div class="form-group">
                         {{ Form::labelUIHorizontal('Tempat Lahir', 'Tempat Lahir') }}
                          <div class="col-sm-10">
                          {{ Form::textUI('tempatlahir', 'Masukan Tempat Lahir','fa fa-street-view') }}
                          </div>
                        </div><br><br>

                         <div class="form-group">
                          <label class="col-sm-2 control-label">Tanggal Lahir </label>
                          <div class="col-sm-10">
                           <div class="input-group">
                              <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                              <input name="tanggallahir" type="text" class="form-control" data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
                          </div>
                           </div><!-- /.input group -->
                        </div> <br><br>

                         <div class="form-group">
                          <label class="col-sm-2 control-label">Jenis Kelamin</label>
                          <div class="col-sm-10">
                           <div class="input-group">
                              <div class="input-group-addon">
                              <i class="fa fa-venus-mars"></i>
                            </div>
                              <select name="jeniskelamin" class="form-control select2" style="width: 100%;">
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                           </div><!-- /.input group -->
                        </div> <br><br>

                         <div class="form-group">
                          {{ Form::labelUIHorizontal('Pekerjaan', 'Pekerjaan') }}
                          <div class="col-sm-10">
                           {{ Form::textUI('pekerjaan', 'Masukan Pekerjaan','fa fa-user-md') }}
                          </div>
                        </div><br><br>

                          <div class="form-group">
                          {{ Form::labelUIHorizontal('Provinsi', 'Provinsi') }}
                          <div class="col-sm-10">
                            {{ Form::textUI('provinsi', 'Masukan Provinsi','fa fa-file') }}
                          </div>
                        </div><br><br>

                        <div class="form-group">
                          {{ Form::labelUIHorizontal('Kota/Kabupaten', 'Kota/Kabupaten') }}
                          <div class="col-sm-10">
                            {{ Form::textUI('kabupaten', 'Masukan Kota/Kabupaten','fa fa-file-text') }}      
                          </div>
                        </div><br><br>

                       <div class="form-group">
                        {{ Form::labelUIHorizontal('Kecamatan', 'Kecamatan') }}
                          <div class="col-sm-10">
                             {{ Form::textUI('kecamatan', 'Masukan Kecamatan','fa fa-file-text') }}     
                          </div>
                        </div><br><br> 

                         <div class="form-group">
                           {{ Form::labelUIHorizontal('Desa', 'Desa / Kelurahan') }}
                          <div class="col-sm-10">
                            {{ Form::textUI('desa', 'Masukan Desa / Kelurahan','fa fa-file-text') }}
                          </div>
                        </div><br><br> 

                         <div class="form-group">
                           {{ Form::labelUIHorizontal('Alamat', 'Alamat Sesuai KTP') }}                          
                          <div class="col-sm-10">
                            {{ Form::textUI('alamat', 'Masukan Alamat Sesuai KTP','fa fa-road') }}
                          </div>
                        </div><br><br> 

                         <div class="form-group">
                           {{ Form::labelUIHorizontal('Alamat Domisili', 'Alamat Domisili Sekarang') }}                          
                          <div class="col-sm-10">
                            {{ Form::textUI('alamatdomisili', 'Masukan Alamat Domisili Sekarang','fa fa-road') }}
                          </div>
                        </div><br><br> 

                      <div class="form-group">
                        {{ Form::labelUIHorizontal('kodepos', 'Kode Pos') }}                   
                          <div class="col-sm-10">
                              {{ Form::textUI('kodepos', 'Masukan Kode Pos','fa fa-newspaper-o') }}
                          </div>
                        </div><br><br> 

                      <div class="form-group">
                        {{ Form::labelUIHorizontal('No HP', 'Nomor Handphone') }}
                          <div class="col-sm-10">
                                {{ Form::textUI('nohp', 'Masukan Nomor Handphone','fa fa-phone-square') }}
                          </div>
                        </div><br><br>  

                        <div class="form-group">
                          {{ Form::labelUIHorizontal('Email', 'Email') }}
                      
                          <div class="col-sm-10">
                           {{ Form::textUI('email', 'Masukan Email','fa fa-at') }}     
                          </div>
                        </div><br><br>  

                         <div class="form-group">
                        {{--      <label class="col-sm-2 control-label">Verifikasi</label>
                          <div class="col-sm-10">
                           <div class="input-group">
                              <div class="input-group-addon">
                              <i class="fa fa-pencil-square-o"></i>
                            </div>
                              <select name="verifikasi" class="form-control select2" style="width: 100%;">
                               <option>Proses Verifikasi</option>
                               </select>
                           </div><!-- /.input group -->
                        </div>
                      
                         <br><br> --}}
                          {{ Form::hidden('verifikasi', 'Proses Verifikasi', array('id' => 'verifikasi')) }}

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