@extends('layouts.master')
@section('content')
<h1>ข้อมูลพื้นฐาน</h1>
{!! Form::model($general, array('class'=>'form-horizontal')) !!}

{!! Form::close( ) !!}
@stop
