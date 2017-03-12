<?php $user = Session::get('user');?>
@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลจำนวนครูและบุคลากร</h4></center>
{!! Form::model($teacher, array('class'=>'form-horizontal')) !!}

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
<table class="table table-bordered table-general">
  <tr>
      <th><div align="center">ประเภทบุคลากร</div></th>
      <th><div align="center">ชาย</div></th>
      <th><div align="center">หญิง</div></th>
  </tr>
  <tr>
    <td>ผู้อำนวยการ</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('mDirector',$teacher->mDirector,array('class' => 'form-control')) !!}
      </div>
    </td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('fDirector',$teacher->fDirector,array('class' => 'form-control')) !!}</td>
      </div>
  </tr>
  <tr>
    <td>รองผู้อำนวยการ</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('mDeputy',$teacher->mDeputy,array('class' => 'form-control')) !!}</td>
      </div>
    <td>
      <div class="col-xs-3">
        {!! Form::text('fDeputy',$teacher->fDeputy,array('class' => 'form-control')) !!}</td>
      </div>
  </tr>
  <tr>
    <td>ครูประจำการ</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('mRegular',$teacher->mRegular,array('class' => 'form-control')) !!}</td>
      </div>
    <td>
      <div class="col-xs-3">
        {!! Form::text('fRegular',$teacher->fRegular,array('class' => 'form-control')) !!}</td>
      </div>
  </tr>
  <tr>
    <td>ครูอัตราจ้าง</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('mRate',$teacher->mRate,array('class' => 'form-control')) !!}</td>
      </div>
    <td>
      <div class="col-xs-3">
        {!! Form::text('fRate',$teacher->fRate,array('class' => 'form-control')) !!}</td>
      </div>
  </tr>
  <tr>
    <td>นักการภารโรง</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('mJanitor',$teacher->mJanitor,array('class' => 'form-control')) !!}</td>
      </div>
    <td>
      <div class="col-xs-3">
        {!! Form::text('fJanitor',$teacher->fJanitor,array('class' => 'form-control')) !!}</td>
      </div>
  </tr>
  <tr>
    <td>ครูโรงเรียนจ้าง</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('mTemp',$teacher->mTemp,array('class' => 'form-control')) !!}</td>
      </div>
    <td>
      <div class="col-xs-3">
        {!! Form::text('fTemp',$teacher->fTemp,array('class' => 'form-control')) !!}</td>
      </div>
  </tr>
  </table>

  <center><h4>การสอนของครูตามแผนการสอน</h4></h4></center>
  <table class="table table-bordered">
  <thead>
      <th><div align="center">ระดับชั้น</div></th>
      <th><div align="center">จำนวนครูผู้สอน</div></th>
  </thead>
  <tr>
    <td>ปฐมวัย</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('childteacher',$teacher->childteacher,array('class' => 'form-control')) !!}</td>
      </div>
    </td>
  </tr>
  <tr>
    <td>ประถม</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('primaryteacher',$teacher->primaryteacher,array('class' => 'form-control')) !!}</td>
      </div>
    </td>
  </tr>
  <tr>
    <td>มัธยมต้น</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('juniorhighschool',$teacher->juniorhighschool,array('class' => 'form-control')) !!}</td>
      </div>
    </td>
  </tr>
  <tr>
    <td>มัธยมปลาย</td>
    <td>
      <div class="col-xs-3">
        {!! Form::text('highschoolteacher',$teacher->highschoolteacher,array('class' => 'form-control')) !!}</td>
      </div>
    </td>
  </tr>
  </table>
<div class="form-action" align="center">
  {!! Form::submit('บันทึกข้อมูล', array('class'=>'btn btn-success')) !!}
  @if(@$user[0]->permission == 0)
  {!! Html::link('teacher', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @endif
  <br /><br /><br />
</div>
{!! Form::close( ) !!}
@stop
