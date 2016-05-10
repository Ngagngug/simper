@extends('layouts.masterup2')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Registrasi Petugas </a></li>
            <li class="active">{{ $title }}</li>
      </ol>
@stop

@section('title-button')
    {{ HTML::buttonAdd() }}
@stop

@section('title-export')
   <div class="btn-group">
     <a class="btn btn-block btn-success" href="{{ route('admin.petugases.export') }}">Export</a>                                  
 </div>
@stop

@section('content')

   {{ Datatable::table()
    ->addColumn( 'first_name', 'created_at', 'last_login', '')       // these are the column headings to be shown
    ->setOptions('aoColumnDefs',array(
        array(
            'sTitle' => 'Nama',
            'aTargets' => [0]),
         array(
            'sTitle' => 'Register',
            'aTargets' => [1]),
         array(
            'sTitle' => 'Login Terakhir',
            'aTargets' => [2]),
        array(
            'bSortable' => false,
            'aTargets' => [3])
        ))
    ->setOptions('bProcessing', true)
    ->setUrl(route('admin.petugases.index'))   // this is the route where data will be retrieved
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