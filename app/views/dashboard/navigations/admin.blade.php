<li class="active treeview">
	{{ HTML::smartNav(route('dashboard'), '<i class="fa fa-dashboard"></i> Dashboard')}}
</li>
<li class="treeview">
  	{{ HTML::smartNav(route('admin.penggunas.index'), '<i class="fa fa-edit"></i> Registrasi Perijinan')}}
</li>
 {{-- <li class="treeview">
  <a href="{{ URL::to('admin/perijinans') }}">
    <i class="fa fa fa-book"></i> <span>Kategori Perijinan</span>
  </a>
</li> --}}
<li class="treeview">
  <a href="#">
    <i class="fa fa-table"></i> <span>Verifikasi</span>
    <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
  	{{ HTML::smartNav(route('admin.verifikasiapoteks.index'), '<i class="fa fa-circle-o"></i> Apotek')}}

    {{ HTML::smartNav(route('admin.verifikasiapotekrakyats.index'), '<i class="fa fa-circle-o"></i> Apotek Rakyat')}}
    {{-- <li><a href="#"><i class="fa fa-circle-o"></i>Puskesmas</a></li> --}}
    {{ HTML::smartNav(route('admin.verifikasikliniks.index'), '<i class="fa fa-circle-o"></i> Klinik')}}

    {{ HTML::smartNav(route('admin.verifikasiklinikdialises.index'), '<i class="fa fa-circle-o"></i> Klinik Dialisis')}}

    {{ HTML::smartNav(route('admin.verifikasiklinikkecantikans.index'), '<i class="fa fa-circle-o"></i> Klinik Kecantikan Estetika')}}

    {{ HTML::smartNav(route('admin.verifikasilabklinikumums.index'), '<i class="fa fa-circle-o"></i> Laboratorium Klinik Umum P')}}
  
    {{ HTML::smartNav(route('admin.verifikasilabklinikumummadyas.index'), '<i class="fa fa-circle-o"></i> Laboratorium Klinik Umum M')}}

    {{ HTML::smartNav(route('admin.verifikasilaboptiks.index'), '<i class="fa fa-circle-o"></i> Laboratorium Optik')}}

    {{ HTML::smartNav(route('admin.verifikasioptikals.index'), '<i class="fa fa-circle-o"></i> Optikal')}}

    {{ HTML::smartNav(route('admin.verifikasitokoobats.index'), '<i class="fa fa-circle-o"></i> Toko Obat')}}

    {{ HTML::smartNav(route('admin.verifikasialatkesehatans.index'), '<i class="fa fa-circle-o"></i> Toko Alat Kesehatan')}}

    {{ HTML::smartNav(route('admin.verifikasirumahsakits.index'), '<i class="fa fa-circle-o"></i> Rumah Sakit')}}

    {{ HTML::smartNav(route('admin.verifikasiusahakecilobats.index'), '<i class="fa fa-circle-o"></i> Usaha Kecil Obat Tradisional')}}

    {{ HTML::smartNav(route('admin.verifikasiusahamikroobats.index'), '<i class="fa fa-circle-o"></i> Usaha Mikro Obat Tradisional')}}

    {{ HTML::smartNav(route('admin.verifikasiunittransfusidarahs.index'), '<i class="fa fa-circle-o"></i> Unit Transfusi Darah')}}
  </ul>
</li>
 <li class="treeview">
  <a href="#">
    <i class="fa fa-home"></i> <span>Visitasi</span>
    <i class="fa fa-angle-left pull-right"></i>
  </a>
  <ul class="treeview-menu">
    {{ HTML::smartNav(route('admin.visitasiapoteks.index'), '<i class="fa fa-circle-o"></i> Apotek')}}

    {{ HTML::smartNav(route('admin.visitasiapotekrakyats.index'), '<i class="fa fa-circle-o"></i> Apotek Rakyat')}}

    {{-- <li><a href="#"><i class="fa fa-circle-o"></i>Puskesmas</a></li> --}}
    {{ HTML::smartNav(route('admin.visitasikliniks.index'), '<i class="fa fa-circle-o"></i> Klinik')}}

    {{ HTML::smartNav(route('admin.visitasiklinikdialises.index'), '<i class="fa fa-circle-o"></i> Klinik Dialisis')}}

    {{ HTML::smartNav(route('admin.visitasiklinikkecantikans.index'), '<i class="fa fa-circle-o"></i> Klinik Kecantikan Estetika')}}

    {{ HTML::smartNav(route('admin.visitasilabklinikumums.index'), '<i class="fa fa-circle-o"></i> Laboratorium Klinik Umum P')}}

    {{ HTML::smartNav(route('admin.visitasilabklinikumummadyas.index'), '<i class="fa fa-circle-o"></i> Laboratorium Klinik Umum M')}}

    {{ HTML::smartNav(route('admin.visitasilaboptiks.index'), '<i class="fa fa-circle-o"></i> Laboratorium Optik')}}

    {{ HTML::smartNav(route('admin.visitasioptikals.index'), '<i class="fa fa-circle-o"></i> Optikal')}}

    {{ HTML::smartNav(route('admin.visitasitokoobats.index'), '<i class="fa fa-circle-o"></i> Toko Obat')}}

    {{ HTML::smartNav(route('admin.visitasialatkesehatans.index'), '<i class="fa fa-circle-o"></i> Toko Alat Kesehatan')}}

    {{ HTML::smartNav(route('admin.visitasirumahsakits.index'), '<i class="fa fa-circle-o"></i> Rumah Sakit')}}

    {{ HTML::smartNav(route('admin.visitasiusahakecilobats.index'), '<i class="fa fa-circle-o"></i> Usaha Kecil Obat Tradisional')}}

    {{ HTML::smartNav(route('admin.visitasiusahamikroobats.index'), '<i class="fa fa-circle-o"></i> Usaha Mikro Obat Tradisional')}}

    {{ HTML::smartNav(route('admin.visitasiunittransfusidarahs.index'), '<i class="fa fa-circle-o"></i> Unit Transfusi Darah')}}

  </ul>
</li>
<li class="treeview">
  {{ HTML::smartNav(route('admin.petugases.index'), '<i class="fa fa fa-book"></i> Petugas')}}
</li>
<!--  <li class="treeview">
 <a href="#">
   <i class="fa fa-cog"></i> <span>Pengaturan</span>
   <i class="fa fa-angle-left pull-right"></i>
 </a>
 <ul class="treeview-menu">
   <li><a href="#"><i class="fa fa-circle-o"></i>Backup Database</a></li>
   <li><a href="#"><i class="fa fa-circle-o"></i>Restore Database</a></li>
 </ul>
</li> -->
