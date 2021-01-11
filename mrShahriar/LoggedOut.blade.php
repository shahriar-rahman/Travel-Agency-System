@extends('layout.layout1')

@section('content')

{!! Form::open(['action' => 'postsController@destroy', 'method' => 'GET', 'class'=> 'form-container']) !!}
{{Form::submit ('Submit', ['class' => 'btn btn-primary'] ) }}
@endsection