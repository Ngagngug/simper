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

     {{ Form::model($perijinan, array('url' => route('admin.perijinans.update', ['perijinans'=>$perijinan->id]), 'method' => 'put', 'class'=>'box-body')) }}
        @include('perijinans._formedit')
    {{ Form::close() }}

@stop