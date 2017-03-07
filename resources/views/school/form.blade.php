<?php $user = Session::get('user');?>
@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลพื้นฐาน</h4></center>
{!! Form::model($school, array('class'=>'form-horizontal')) !!}
<table class="table table=bordered table-general">
  <tr>
    <td>รหัสโรงเรียน : {{ $school->id }}</td>
    <td>ชื่อโรงเรียน : {{ $school->schoolName }}</td>
    <td>
      สังกัด : {{ $school->headSchool->name }}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('no', 'เลขที่', array('class'=>'control-label')) !!}
      {!! Form::text('no',$school->no,array('class' => 'form-control')) !!}
    </td>
    <td>
      {!! Form::label('moo', 'หมู่ที่', array('class'=>'control-label')) !!}
      {!! Form::text('moo',$school->moo,array('class' => 'form-control')) !!}
    </td>
    <td>
      {!! Form::label('tambol', 'ตำบล', array('class'=>'control-label')) !!}
      {!! Form::text('tambol',$school->tambol,array('class' => 'form-control')) !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('district', 'อำเภอ', array('class'=>'control-label')) !!}
      {!! Form::text('district',$school->district,array('class' => 'form-control')) !!}
    </td>
    <td>
      {!! Form::label('province', 'จังหวัด', array('class'=>'control-label')) !!}
      {!! Form::text('province',$school->province,array('class' => 'form-control')) !!}
    </td>
    <td>
      {!! Form::label('tel', 'โทรศัพท์', array('class'=>'control-label')) !!}
      {!! Form::text('tel',$school->tel,array('class' => 'form-control')) !!}
    </td>
  </tr>
  <tr>
    <td>
      {!! Form::label('email', 'อีเมลล์', array('class'=>'control-label')) !!}
      {!! Form::text('email',$school->email,array('class' => 'form-control')) !!}
    </td>
    <td></td>
    <td></td>
  </tr>
</table>

<div class="form-action" align="center">
  {!! Form::submit('บันทึกข้อมูล', array('class'=>'btn btn-success')) !!}
  @if(@$user[0]->permission == 0)
  {!! Html::link('general', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @else
  {!! Html::link('schoolgeneral', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @endif
  <br /><br /><br />
</div>
{!! Form::close( ) !!}
@stop
