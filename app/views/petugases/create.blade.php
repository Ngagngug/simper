@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
    <li><a href="{{ route('admin.petugases.index') }}"><i class="fa fa-dashboard"></i> Registrasi Petugas</a></li>
            <li class="active">{{ $title }}</li>  
      </ol>
@stop

@section('content')

    {{ Form::open(array('url' => route('admin.petugases.store'), 'method' => 'post', 'class'=>'box-body')) }}
        @include('petugases._form')
    {{ Form::close() }}

@stop