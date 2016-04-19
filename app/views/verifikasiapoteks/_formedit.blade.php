  
      <div class="box box-primary">
                <div class="box-body no-padding">
                  <!-- <div class="mailbox-controls">
                    Check all button
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button> Check All
                  </div> -->
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>


                      <!-- @foreach ($data as $data)   -->
                        
                          {{-- The current value is {{ $i }} --}}
                          <tr>
                          <!-- <td><input type="checkbox" name="syarat[]" value="Syarat1"></td> -->
                          <td>{{ Form::checkbox('syarat'.$data->id, 'yes', true) }}</td>
                          <td class="mailbox-subject"><b> {{ $data->id.". ".$data->kelengkapan }} </b> </td>
                        </tr>
                     
                        
                      <!-- @endforeach -->


                    

                      {{-- 
                      @for($x = 0; $x < $imagesTotal; $x++)
                          <p>
                          {{ $i++ }}
                          {{ $description[$x] }}</p>
                      @endfor

                      @foreach ($users as $user)
                          <p>This is user {{ $user->id }}</p>
                      @endforeach

                      @forelse($users as $user)
                          <li>{{ $user->name }}</li>
                      @empty
                          <p>No users</p>
                      @endforelse

                      @while (true)
                          <p>I'm looping forever.</p>
                      @endwhile --}}


                       {{--  <tr>
                           <td>{{ Form::checkbox('syarat2', 'yes') }}</td>
                          <td class="mailbox-subject"><b>2. FC STRA dan SIPA </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat3', 'yes') }}</td>
                          <td class="mailbox-subject"><b>3. FC KTP APA </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat4', 'yes') }}</td>
                          <td class="mailbox-subject"><b>4. Surat Pernyataan tempat tinggal/domisili secara nyata diketahui oleh IAI (bermeterai Rp. 6.000,-)  </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat5', 'yes') }}</td>
                          <td class="mailbox-subject"><b>5. Denah situasi calon Apotek Rakyat terhadap sarana lain yang diketahui oleh IAI </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat6', 'yes') }}</td>
                          <td class="mailbox-subject"><b>6. Denah lay-out Apotek Rakyat disertai dengan ukuran yang proporsional yang diketahui oleh IAI </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat7', 'yes') }}</td>
                          <td class="mailbox-subject"><b>7. Surat status bangunan : hak milik/sewa (dilampiri perjanjian sewa minimal 3 tahun) dan FC sertifikat tanah </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat8', 'yes') }}</td>
                          <td class="mailbox-subject"><b>8. Apabila dibantu TTK, agar melampirkan : - FC ijazah, STRTTK dan SIK TTK; - Surat lolos butuh dari tmpt kerja sebelumnya (bagi TTK pindahan dari Kab./Prov lain </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat9', 'yes') }}</td>
                          <td class="mailbox-subject"><b>9. Daftar alat perlengkapan calon Apotek Rakyat (terperinci) </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat10', 'yes') }}</td>
                          <td class="mailbox-subject"><b>10. Surat Pernyataan kepemilikan perlengkapan calon Apotek Rakyat (bermeterai Rp. 6.000,-)  </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat11', 'yes') }}</td>
                          <td class="mailbox-subject"><b>11. Surat Pernyataan dari calon APA bahwa calon APA tidak bekerja tetap pada perusahaan farmasi lain dan tidak menjadi APA di apotek lain (bermeterai Rp. 6.000,-) </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat12', 'yes') }}</td>
                          <td class="mailbox-subject"><b>12. Surat izin atasan ( bagi pemohon PNS, anggota TNI dan karyawan instansi pemerintah lainnya) </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat13', 'yes') }}</td>
                          <td class="mailbox-subject"><b>13. Akte Notaris perjanjian kerjasama calon APA Rakyat dengan PSA Rakyat </b> </td>
                        </tr>
                        <tr>
                           <td>{{ Form::checkbox('syarat14', 'yes') }}</td>
                          <td class="mailbox-subject"><b>14. Surat Pernyataan calon PSA Rakyat tidak terlibat pelanggaran peraturan perundang-undangan di bidang obat (bermeterai Rp. 6.000,-) </b> </td>
                        </tr>
                        <tr>
                          <td>{{ Form::checkbox('syarat15', 'yes') }}</td>
                          <td class="mailbox-subject"><b>15. Surat keterangan sehat dari dokter yang bekerja di rumah sakit pemerintah atau puskesmas untuk melaksanakan tugas Apoteker </b> </td>
                        </tr>
                         <tr>
                          <td>{{ Form::checkbox('syarat16', 'yes') }}</td>
                          <td class="mailbox-subject"><b>16. Lolos butuh dari Ka. Dinkes Prov (bagi pemohon yg pindah dari Prov. Lain) dan dari Ka. Dinkes Kab/Kot bagi yang pindah dari kabupaten//kota lain </b> </td>
                        </tr>
                         <tr>
                          <td>{{ Form::checkbox('syarat17', 'yes') }}</td>
                          <td class="mailbox-subject"><b>17. Daftar kepustakaan wajib Apotek Rakyat </b> </td>
                        </tr>
                         <tr>
                          <td>{{ Form::checkbox('syarat18', 'yes') }}</td>
                          <td class="mailbox-subject"><b>18. Rekomendasi dari IAI </b> </td>
                        </tr>
                         <tr>
                          <td>{{ Form::checkbox('syarat19', 'yes') }}</td>
                          <td class="mailbox-subject"><b>19. FC izin HO </b> </td>
                        </tr>
                         <tr>
                          <td>{{ Form::checkbox('syarat20', 'yes') }}</td>
                          <td class="mailbox-subject"><b>20. Surat Pernyataan calon APA Rakyat dan PSA Rakyat sanggup mentaati ketentuan dan peraturan perundang-undangan yang berlaku (bermeterai Rp. 6.000,-)   </b> </td>
                        </tr>
                         <tr>
                          <td>{{ Form::checkbox('syarat21', 'yes') }}</td>
                          <td class="mailbox-subject"><b>21. FC NPWP PSA Rakyat </b> </td>
                        </tr>
                         <tr>
                          <td>{{ Form::checkbox('syarat22', 'yes') }}</td>
                          <td class="mailbox-subject"><b>22. Pasfoto berwarna APA Uk. 4x6 = 2 lembar, uk. 3x4 = 6 lembar </b> </td>
                        </tr>
                         <tr>
                          <td>{{ Form::checkbox('syarat23', 'yes') }}</td>
                          <td class="mailbox-subject"><b>23. FC Surat Pernyataan Kesanggupan Pengelolaan dan Pemantauan Lingkungan Hidup (SPPL) </b> </td>
                        </tr> --}}
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->

  <div class="box box-primary">
    <!-- form start -->
    <form role="form">
                      <div class="box-footer">
                          {{ Form::submitUI('Simpan') }}
                      </div>
</div>

<script>
    $(document).ready(function() {
        $("#perijinan_id").select2();
    });
</script>