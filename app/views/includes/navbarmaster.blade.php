   <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/assets/dist/img/doctor.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p> {{ Sentry::getUser()->first_name . ' ' . Sentry::getUser()->last_name }} </p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">NAVIGASI UTAMA</li>
            <li class="active treeview">
              <a href="{{ URL::to('dashboard') }}">
                <i class="fa fa-dashboard"></i> <span>Beranda</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ URL::to('admin/penggunas') }}">
                <i class="fa fa-edit"></i> <span>Registrasi Perijinan</span>
              </a>
            </li>
             <li class="treeview">
              <a href="{{ URL::to('admin/perijinans') }}">
                <i class="fa fa fa-book"></i> <span>Kategori Perijinan</span>
              </a>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-table"></i> <span>Verifikasi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/verifikasiapoteks') }}"><i class="fa fa-circle-o"></i>Apotek</a></li>
                <li><a href="{{ URL::to('admin/verifikasiapotekrakyats') }}"><i class="fa fa-circle-o"></i>Apotek Rakyat</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Puskesmas</a></li>
                <li><a href="{{ URL::to('admin/verifikasikliniks') }}"><i class="fa fa-circle-o"></i>Klinik</a></li>
                <li><a href="{{ URL::to('admin/verifikasiklinikdialises') }}"><i class="fa fa-circle-o"></i>Klinik Dialisis</a></li>
                <li><a href="{{ URL::to('admin/verifikasiklinikkecantikans') }}"><i class="fa fa-circle-o"></i>Klinik Kecantikan Estetika</a></li>
                <li><a href="{{ URL::to('admin/verifikasilabklinikumums') }}"><i class="fa fa-circle-o"></i>Laboratorium Klinik Umum P</a></li>
                <li><a href="{{ URL::to('admin/verifikasilaboptiks') }}"><i class="fa fa-circle-o"></i>Laboratorium Optik</a></li>
                <li><a href="{{ URL::to('admin/verifikasioptikals') }}"><i class="fa fa-circle-o"></i>Optikal</a></li>
                <li><a href="{{ URL::to('admin/verifikasitokoobats') }}"><i class="fa fa-circle-o"></i>Toko Obat</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Pedagang Eceran Obat</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Toko Alat Kesehatan</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Rumah Sakit</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-home"></i> <span>Visitasi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/visitasiapoteks') }}"><i class="fa fa-circle-o"></i>Apotek</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Apotek Rakyat</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Puskesmas</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Klinik</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Klinik Dialisis</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Klinik Kecantikan Estetika</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Laboratorium Klinik Umum P</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Laboratorium Optik</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Optikal</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Toko Obat</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Pedagang Eceran Obat</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Toko Alat Kesehatan</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Rumah Sakit</a></li>
              </ul>
            </li>
             <li class="treeview">
              <a href="#">
                <i class="fa fa-cog"></i> <span>Pengaturan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ URL::to('admin/verifikasiapoteks') }}"><i class="fa fa-circle-o"></i>Backup Database</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Restore Database</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i>Profil</a></li>
              </ul>
            </li>
            <li>
          </ul>