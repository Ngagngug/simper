@extends('layouts.masterup3')

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

    {{ Form::open(array('url' => route('admin.penggunas.store'), 'method' => 'post', 'class'=>'box-body')) }}
        @include('penggunas._form')
    {{ Form::close() }}

@stop