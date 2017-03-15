<?php $user = Session::get('user');?>
@extends('layouts.master')
@section('content')
<center><h3>ข้อมูลเกี่ยวกับระบบไฟฟ้าโรงเรียน</h3></center>
{!! Form::model($dltv, array('class'=>'form-horizontal')) !!}
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

<div class="container-fluid">
  <h4>1. ปัจจุบันโรงเรียนใช้การจัดการศึกษาทางไกลผ่านดาวเทียมในระดับชั้น</h4>
  <div class="col-xs-8 col-md-6">
    <div class="form-group">
      <input type="radio" name="dltvLevel" id="dltvLevel1" value="1">
      {!! Form::label('dltvLevel', 'ไม่มีปัญหาระบบไฟฟ้า', array('class' => 'control-label')) !!}
    </div>
    <div class="form-group">
      <input type="radio" name="dltvLevel" id="dltvLevel2" value="2">
      {!! Form::label('dltvLevel', 'มีปัญหาระบบไฟฟ้า', array('class' => 'control-label')) !!}
      {!! Form::text('dltvLevelOther',$dltv->dltvLevelOther,array('class' => 'form-control','placeholder' => 'โปรดระบุชั้น')) !!}
    </div>
  </div>
</div>

<div id="place_select">

  <div class="container-fluid">
    <h4>2. ข้อมูลเกี่ยวกับชุดอุปกรณ์รับสัญญาณดาวเทียมของโรงเรียน</h4>
        <h5>2.1 จานรับสัญญาณดาวเทียมที่ใช้งานได้ จำนวน (ห้อง)</h5>
      <div class="form-group">
        <div class="col-xs-3">
          {!! Form::text('dltvSatelliteNum',$dltv->dltvSatelliteNum,array('class' => 'form-control')) !!}
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-3">
          <input type="radio" name="dltvLevel" id="dltvLevel4" value="4">
          {!! Form::label('dltvLevel', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-3">
          <input type="radio" name="dltvLevel" id="dltvLevel4" value="4">
          {!! Form::label('dltvLevel', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-3">
          {!! Form::label('dltvLevel', 'ต้องการจานรับสัญญาณดาวเทียม จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('dltvLevelOther',$dltv->dltvLevelOther,array('class' => 'form-control')) !!}
        </div>
      </div>
  </div>

</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!--<script type="text/javascript" src="js.js"></script>  -->
<script type="text/javascript">
$(function(){
    // เมื่อ radio ชื่อว่า myradio ถูก คลิก
    $(":radio[name='dltvLevel']").on("click",function(){
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
  {!! Html::link('student', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @else
  {!! Html::link('schoolstudent', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @endif
  <br /><br /><br />
</div>
{!! Form::close() !!}

@stop
