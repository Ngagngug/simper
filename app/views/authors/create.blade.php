@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
    <li><a href="{{ route('admin.authors.index') }}"><i class="fa fa-dashboard"></i> Penulis </a></li>
            <li class="active">{{ $title }}</li>  
      </ol>
@stop

@section('content')

    {{ Form::open(array('url' => route('admin.authors.store'), 'method' => 'post', 'class'=>'box-body')) }}
        @include('authors._form')
    {{ Form::close() }}

@stop