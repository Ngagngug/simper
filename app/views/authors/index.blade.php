@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('title-button')
    {{ HTML::buttonAdd() }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard </a></li>
            <li class="active">{{ $title }}</li>
      </ol>
@stop

@section('content')

   {{ Datatable::table()
    ->addColumn('id','Nama', '')       // these are the column headings to be shown
    ->setOptions('aoColumnDefs',array(
        array(
            'bVisible' => false,
            'aTargets' => [0]),
        array(
            'sTitle' => 'Nama',
            'aTargets' => [1]),
        array(
            'bSortable' => false,
            'aTargets' => [2])
        ))
    ->setOptions('bProcessing', true)
    ->setUrl(route('admin.authors.index'))   // this is the route where data will be retrieved
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