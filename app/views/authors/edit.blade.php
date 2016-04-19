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

     {{ Form::model($author, array('url' => route('admin.authors.update', ['authors'=>$author->id]), 'method' => 'put', 'class'=>'box-body')) }}
        @include('authors._formedit')
    {{ Form::close() }}

@stop