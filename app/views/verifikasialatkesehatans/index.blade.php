@extends('layouts.masterup2')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Verifikasi Toko Alat Kesehatan</a></li>
            <li class="active">{{ $title }}</li>
      </ol>
@stop

@section('title-button')
    <a class="btn btn-block btn-primary" href="{{ route('admin.verifikasialatkesehatans.export') }}">Export</a>
@stop

@section('content')

   <?php
   $datatable = Datatable::table()
    ->addColumn('id','Nama' ,'Verifikasi', 'Tanggal Verifikasi', '')       // these are the column headings to be shown
    ->setOptions('aoColumnDefs',array(
        array(
            'bVisible' => false,
            'aTargets' => [0]),
          array(
            'sTitle' => 'Nama',
            'aTargets' => [1]),
        array(
            'sTitle' => 'Status Verifikasi',
            'aTargets' => [2]),
         array(
            'sTitle' => 'Tanggal Verifikasi',
            'aTargets' => [3]),
        array(
            'bSortable' => false,
            'aTargets' => [4])
        ))
    ->setOptions('bProcessing', true)
    ->setUrl(route('admin.verifikasialatkesehatans.index'));
        ?>

        {{ $datatable->render('datatable.custom') }}

    <script>
        $(function() {
            $('\
              <div id="filter_status" class="dataTables_length uk-margin-left" style="display: inline-block;">\
                <label>\
                    <select size="1" name="filter_status" aria-controls="filter_status">\
                        <option value="all" selected="selected">Semua</option>\
                        <option value="proses-verifikasi">Proses Verifikasi</option>\
                        <option value="verifikasi-belum-lengkap">Verifikasi Belum Lengkap</option>\
                    </select>\
                </label>\
              </div>\
            ').insertAfter('.dataTables_length');

            $('select[name="filter_status"]').change(function() {
                var $oTable = $('#{{ $datatable->getId() }}').dataTable();
                switch (this.value) {
                    case 'all' :
                        $oTable.fnFilter('');
                        break;
                    case 'proses-verifikasi' :
                        $oTable.fnFilter('proses verifikasi');
                        break;
                    case 'verifikasi-belum-lengkap' :
                        $oTable.fnFilter('verifikasi belum lengkap');
                        break;
                }
            });
        });
    </script>

@stop

@section('scripts')
    <script>
     $(document.body).on('submit', '.js-confirm', function () {

           var c = confirm("Yakin mau menghapus data ini?");

           return c; //you can just return c because it will be true or false

        });
    </script>
@stop