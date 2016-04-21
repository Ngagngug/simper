@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
 <ol class="breadcrumb">
    <li><a href="/">Dashboard</a></li>
    <li><a href="{{ route('admin.verifikasioptikals.index') }}">Verifikasi Optikal</a></li>
    <li class="active">{{ $title }}</li>
 </ol>
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
  <h3 class="box-title">Silahkan Pilih Data :</h3>
  </div><!-- /.box-header -->
    {{ Form::open(array('url' => route('admin.verifikasioptikals.exportpost'), 'method' => 'post', 'class'=>'box-body')) }}
         <div class="form-group">
            <label>Pilih Status Verifikasi</label>          
            <select name="verifikasi[]" class="form-control select2" multiple="multiple" data-placeholder="Pilih Status Verifikasi" style="width: 100%;">
              <option>Proses Verifikasi</option>
              <option>Verifikasi Belum Lengkap</option>
            </select>        
          </div><!-- /.form-group -->

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

    <script>
        $(document).ready(function() {
            $("#perijinan_id").select2({placeholder: 'Pilih Kategori', allowClear: true});
        });
    </script>
@stop