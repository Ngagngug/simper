@extends('layouts.masterup3')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
 <ol class="breadcrumb">
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('admin.petugases.index') }}">Export Petugas</a></li>
    <li class="active">{{ $title }}</li>
 </ol>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
  <h3 class="box-title">Silahkan Pilih Data :</h3>
  </div><!-- /.box-header -->
    {{ Form::open(array('url' => route('admin.petugases.exportpost'), 'method' => 'post', 'class'=>'box-body')) }}

        <div class="form-group">
            {{ Form::labelUI('type', 'Pilih Output') }}
            {{ Form::radio('type', 'xls', true) }} Excel
            {{ Form::radio('type', 'pdf') }} PDF
        </div>

        {{ HTML::divider() }}
        <div class="box-footer">
            {{ Form::submitUk('Download') }}
        </div>
    {{ Form::close() }}

    </div>
@stop