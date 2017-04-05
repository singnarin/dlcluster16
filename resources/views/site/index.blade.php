@extends('layouts.master')
@section('content')
<?php $user = Session::get('user'); ?>
<center>
  <h3>ยินดีต้อนรับ {{$user[0]->schoolName}}</h3>
  {!! Html::image('/images/customLogo.jpg') !!}
</center>
@stop
