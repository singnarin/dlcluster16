<?php $user = Session::get('user');?>
@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลจำนวนนักเรียน</h4></center>
{!! Form::model($student, array('class'=>'form-horizontal')) !!}
@if($user[0]->permission == 0)
{!! Form::hidden('id',$user[0]->id ) !!}
@else
{!! Form::hidden('id',$id ) !!}
@endif
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}" align='center'>{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->

<table class="table table-bordered">
<thead>
    <th><div align="center">ระดับชั้น</div></th>
    <th><div align="center">ชาย</div></th>
    <th><div align="center">หญิง</div></th>
</thead>
<tr>
  <td>อนุบาล 1</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mo1',$student->mo1,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fo1',$student->fo1,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>อนุบาล 2</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mo2',$student->mo2,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fo2',$student->fo2,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ป.1</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mp1',$student->mp1,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fp1',$student->fp1,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ป.2</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mp2',$student->mp2,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fp2',$student->fp2,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ป.3</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mp3',$student->mp3,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fp3',$student->fp3,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ป.4</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mp4',$student->mp4,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fp4',$student->fp4,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ป.5</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mp5',$student->mp5,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fp5',$student->fp5,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ป.6</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mp6',$student->mp6,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fp6',$student->fp6,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ม.1</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mm1',$student->mm1,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fm1',$student->fm1,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ม.2</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mm2',$student->mm2,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fm2',$student->fm2,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ม.3</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mm3',$student->mm3,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fm3',$student->fm3,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ม.4</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mm4',$student->mm4,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fm4',$student->fm4,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ม.5</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mm5',$student->mm5,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fm5',$student->fm5,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
<tr>
  <td>ม.6</td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('mm6',$student->mm6,array('class' => 'form-control')) !!}
    </div>
  </td>
  <td>
    <div class="col-xs-3">
      {!! Form::text('fm6',$student->fm6,array('class' => 'form-control')) !!}
    </div>
  </td>
</tr>
</table>
<div class="form-action" align="center">
  {!! Form::submit('บันทึกข้อมูล', array('class'=>'btn btn-success')) !!}
  @if(@$user[0]->permission == 0)
  {!! Html::link('student', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @else
  {!! Html::link('schoolstudent', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @endif
  <br /><br /><br />
</div>
{!! Form::close() !!}

@stop
