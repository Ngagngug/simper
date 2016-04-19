@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
    <li><a href="{{ route('admin.penggunas.index') }}"><i class="fa fa-dashboard"></i> Registrasi </a></li>
            <li class="active">{{ $title }}</li>  
      </ol>
@stop

@section('content')

     {{ Form::model($pengguna, array('url' => route('admin.penggunas.update', ['penggunas'=>$pengguna->id]), 'method' => 'put', 'class'=>'box-body')) }}
        @include('penggunas._formedit')
    {{ Form::close() }}

@stop