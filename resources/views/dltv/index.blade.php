@extends('layouts.master')
@section('content')
<center><h4>ข้อมูล DLTV</h4></center>


{!! Html::link('../teacherForm/'.$school->id, 'แก้ไขข้อมูล', array('class'=>'btn btn-primary')) !!}
@stop
