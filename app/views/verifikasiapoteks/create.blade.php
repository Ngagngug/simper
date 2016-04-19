@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
    <li><a href="{{ route('admin.verifikasiapoteks.index') }}"><i class="fa fa-dashboard"></i> Verifikasi </a></li>
            <li class="active">{{ $title }}</li>  
      </ol>
@stop

@section('content')
	     <div class="box box-primary">
                <div class="box-body no-padding">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button> Check All
                  </div>
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>1. Surat Permohonan Surat Izin Apotek Rakyat dari APA yang ditujukan kepada Ka. Dinkes (bermeterai Rp. 6.000,-) </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>2. FC STRA dan SIPA </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>3. FC KTP APA </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>4. Surat Pernyataan tempat tinggal/domisili secara nyata diketahui oleh IAI (bermeterai Rp. 6.000,-)  </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>5. Denah situasi calon Apotek Rakyat terhadap sarana lain yang diketahui oleh IAI </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>6. Denah lay-out Apotek Rakyat disertai dengan ukuran yang proporsional yang diketahui oleh IAI </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>7. Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 3 tahun) dan FC sertifikat tanah </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>8. Apabila dibantu TTK, agar melampirkan : - FC ijazah, STRTTK dan SIK TTK; - Surat lolos butuh dari tmpt kerja sebelumnya (bagi TTK pindahan dari Kab./Prov lain </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>9. Daftar alat perlengkapan calon Apotek Rakyat (terperinci) </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>10. Surat Pernyataan kepemilikan perlengkapan calon Apotek Rakyat (bermeterai Rp. 6.000,-)  </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>11. Surat Pernyataan dari calon APA bahwa calon APA tidak bekerja tetap pada perusahaan farmasi lain dan tidak menjadi APA di apotek lain (bermeterai Rp. 6.000,-) </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>12. Surat izin atasan ( bagi pemohon PNS, anggota TNI dan karyawan instansi pemerintah lainnya) </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>13. Akte Notaris perjanjian kerjasama calon APA Rakyat dengan PSA Rakyat </b> </td>
                        </tr>
                        <tr>
                          <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>14. Surat Pernyataan calon PSA Rakyat tidak terlibat pelanggaran peraturan perundang-undangan di bidang obat (bermeterai Rp. 6.000,-) </b> </td>
                        </tr>
                        <tr>
                         <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>15. Surat keterangan sehat dari dokter yang bekerja di rumah sakit pemerintah atau puskesmas untuk melaksanakan tugas Apoteker </b> </td>
                        </tr>
                         <tr>
                         <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>16. Lolos butuh dari Ka. Dinkes Prov (bagi pemohon yg pindah dari Prov. Lain) dan dari Ka. Dinkes Kab/Kot bagi yang pindah dari kabupaten//kota lain </b> </td>
                        </tr>
                         <tr>
                         <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>17. Daftar kepustakaan wajib Apotek Rakyat </b> </td>
                        </tr>
                         <tr>
                         <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>18. Rekomendasi dari IAI </b> </td>
                        </tr>
                         <tr>
                         <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>19. FC izin HO </b> </td>
                        </tr>
                         <tr>
                         <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>20. Surat Pernyataan calon APA Rakyat dan PSA Rakyat sanggup mentaati ketentuan dan peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-)   </b> </td>
                        </tr>
                         <tr>
                         <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>21. FC NPWP PSA Rakyat </b> </td>
                        </tr>
                         <tr>
                         <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>22. Pasfoto berwarna APA Uk. 4x6 = 2 lembar, uk. 3x4 = 6 lembar </b> </td>
                        </tr>
                         <tr>
                         <td><input type="checkbox"></td>
                          <td class="mailbox-subject"><b>23. FC Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL) </b> </td>
                        </tr>
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
             	  {{ Form::open(array('url' => route('admin.verifikasiapoteks.store'), 'method' => 'post', 'class'=>'box-body')) }}
			        @include('verifikasiapoteks._form')
			      {{ Form::close() }}
              </div><!-- /. box -->
@stop

@section('scripts')

	 <script>
      $(function () {
        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('.mailbox-messages input[type="checkbox"]').iCheck({
          checkboxClass: 'icheckbox_flat-blue',
          radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
          var clicks = $(this).data('clicks');
          if (clicks) {
            //Uncheck all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
            $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
          } else {
            //Check all checkboxes
            $(".mailbox-messages input[type='checkbox']").iCheck("check");
            $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
          }
          $(this).data("clicks", !clicks);
        });

        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function (e) {
          e.preventDefault();
          //detect type
          var $this = $(this).find("a > i");
          var glyph = $this.hasClass("glyphicon");
          var fa = $this.hasClass("fa");

          //Switch states
          if (glyph) {
            $this.toggleClass("glyphicon-star");
            $this.toggleClass("glyphicon-star-empty");
          }

          if (fa) {
            $this.toggleClass("fa-star");
            $this.toggleClass("fa-star-o");
          }
        });
      });
    </script>

@stop