@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
    <li><a href="{{ route('admin.perijinans.index') }}"><i class="fa fa-dashboard"></i> Perijinan </a></li>
            <li class="active">{{ $title }}</li>  
      </ol>
@stop

@section('content')

    {{ Form::open(array('url' => route('admin.perijinans.store'), 'method' => 'post', 'class'=>'box-body')) }}
        @include('perijinans._form')
    {{ Form::close() }}

@stop