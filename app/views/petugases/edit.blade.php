@extends('layouts.masterup4')

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

     {{ Form::model($petugase, array('url' => route('admin.petugases.update', ['petugases'=>$petugase->id]), 'method' => 'put', 'class'=>'box-body')) }}
        @include('petugases._formedit')
    {{ Form::close() }}

@stop