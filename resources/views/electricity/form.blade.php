<?php $user = Session::get('user');?>
@extends('layouts.master')
@section('content')
<center><h3>ข้อมูลเกี่ยวกับระบบไฟฟ้าโรงเรียน</h3></center>
{!! Form::model($electricity, array('class'=>'form-horizontal')) !!}
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

@if($errors->has())
  <div class="alert alert-danger">
    @foreach($errors->all() as $error)
      {{ $error }}<br />
    @endforeach
  </div>
@endif

<div class="container-fluid">
  <h4>1. ระบบไฟฟ้าโรงเรียน</h4>
  <div class="col-xs-8 col-md-6">
    <div class="form-group">
      <input type="radio" name="electricitySystem" value="1">
      {!! Form::label('electricitySystem', 'ระบบไฟฟ้าจากการไฟฟ้า', array('class' => 'control-label')) !!}
    </div>
    <div class="form-group">
      <input type="radio" name="electricitySystem" value="2">
      {!! Form::label('electricitySystem', 'อื่นๆ', array('class' => 'control-label')) !!}
      {!! Form::text('systemDetail',$electricity->systemDetail,array('class' => 'form-control','placeholder' => 'โปรดระบุ')) !!}
    </div>
  </div>
</div>

  <div class="container-fluid">
    <h4>2. ปัญหาเกี่ยวกับระบบไฟฟ้าโรงเรียน</h4>
      <div class="col-xs-8 col-md-6">
        <div class="form-group">
          <input type="radio" name="electricityProblem" id="electricityProblem" value="1">
          {!! Form::label('electricityProblem', 'ไม่มีปัญหาเกี่ยวกับระบบไฟฟ้าโรงเรียน', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="electricityProblem" id="electricityProblem" value="2">
          {!! Form::label('electricityProblem', 'มีมีปัญหาเกี่ยวกับระบบไฟฟ้าโรงเรียน', array('class' => 'control-label')) !!}
        <div id="place_select">
          {!! Form::label('problemDetail', 'ปัญหาเกี่ยวกับระบบไฟฟ้า', array('class' => 'control-label')) !!}
          {!! Form::textArea('problemDetail',$electricity->problemDetail,array('class' => 'form-control')) !!}
          {!! Form::label('problemFix', 'วิธีการ/ความต้องการในการแก้ปัญหาระบบไฟฟ้า', array('class' => 'control-label')) !!}
          {!! Form::textArea('problemFix',$electricity->problemFix,array('class' => 'form-control')) !!}
        </div>
        </div>
      </div>
  </div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!--<script type="text/javascript" src="js.js"></script>  -->
<script type="text/javascript">
$(function(){
    // เมื่อ radio ชื่อว่า myradio ถูก คลิก
    $(":radio[name='electricityProblem']").on("click",function(){
        var valData=$(this).val(); // เก็บค่า ไว้ในตัวแปร
        if(valData==1){ // เปรียบเทียบค่า
            $("#place_select").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select").show();   //แสดงส่วนที่ต้องการ
        }
    });

});
</script>

<div class="form-action" align="center">
  {!! Form::submit('บันทึกข้อมูล', array('class'=>'btn btn-success')) !!}
  @if(@$user[0]->permission == 0)
  {!! Html::link('electricity', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @else
  {!! Html::link('schoolelectricity', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @endif
  <br /><br /><br />
</div>
{!! Form::close() !!}

@stop
