@extends('layouts.masterup2')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Registrasi </a></li>
            <li class="active">{{ $title }}</li>
      </ol>
@stop

@section('title-button')
    {{ HTML::buttonAdd() }}
@stop

@section('title-export')
   <div class="btn-group">
     <a class="btn btn-block btn-success" href="{{ route('admin.penggunas.export') }}">Export</a>                                  
 </div>
@stop

@section('content')

   {{ Datatable::table()
    ->addColumn( 'perijinan', 'id', 'lokasi', 'nama', 'verifikasi', 'created_at', '')       // these are the column headings to be shown
    ->setOptions('aoColumnDefs',array(
        array(
            'sTitle' => 'Perijinan',
            'aTargets' => [0]),
        array(
            'bVisible' => false,
            'aTargets' => [1]),
        array(
            'sTitle' => 'Lokasi',
            'aTargets' => [2]),
        array(
            'sTitle' => 'Nama',
            'aTargets' => [3]),
         array(
            'sTitle' => 'Verifikasi',
            'aTargets' => [4]),
         array(
            'sTitle' => 'Pendaftaran',
            'aTargets' => [5]),
        array(
            'bSortable' => false,
            'aTargets' => [6])
        ))
    ->setOptions('bProcessing', true)
    ->setUrl(route('admin.penggunas.index'))   // this is the route where data will be retrieved
    ->render('datatable.custom') }}

@stop

@section('scripts')
    <script>
     $(document.body).on('submit', '.js-confirm', function () {

           var c = confirm("Yakin mau menghapus data ini?");

           return c; //you can just return c because it will be true or false

        });
    </script>
@stop