@extends('layouts.master')
@section('content')
<h1>Welcome Home</h1>
@if(!empty(Session::get('user')))
<?php $user = Session::get('user'); ?>
{{$user[0]->schoolName}}
@else
  {{"5555"}}
@endif
@stop
