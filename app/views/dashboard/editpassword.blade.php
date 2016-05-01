@extends('layouts.master')

@section('title')
    {{ $title }}
@stop

@section('breadcrumb')
      <ol class="breadcrumb">
    <li><a href="{{ route('home.editpassword') }}"><i class="fa fa-dashboard"></i> Edit Password </a></li>
            <li class="active">{{ $title }}</li>  
      </ol>
@stop

@section('content')   
        
  {{ Form::open(array('url' => route('home.updatepassword'), 'method' => 'post', 'class'=>'box-body')) }}
  @include('dashboard._formedit')
 {{ Form::close() }}

@stop