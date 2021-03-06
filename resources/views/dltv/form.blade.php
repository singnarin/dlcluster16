<?php $user = Session::get('user');?>
@extends('layouts.master')
@section('content')
<center><h3>สภาพการดำเนินงาน DLTV </h3></center>
{!! Form::open(array('dltv' => 'myUpload', 'enctype' => 'multipart/form-data')) !!}
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
  <h4>1. ปัจจุบันโรงเรียนใช้การจัดการศึกษาทางไกลผ่านดาวเทียมในระดับชั้น</h4>
  <div class="col-xs-8 col-md-6">
    <div class="form-group">
      <input type="radio" name="dltvLevel" id="dltvLevel1" value="1">
      {!! Form::label('dltvLevel1', 'ป.1-ป.6', array('class' => 'control-label')) !!}
    </div>
    <div class="form-group">
      <input type="radio" name="dltvLevel" id="dltvLevel2" value="2">
      {!! Form::label('dltvLevel', 'บางระดับชั้น', array('class' => 'control-label')) !!}
      {!! Form::text('dltvLevelDetail2','',array('class' => 'form-control','placeholder' => 'โปรดระบุชั้น')) !!}
    </div>
    <div class="form-group">
      <input type="radio" name="dltvLevel" id="dltvLevel3" value="3">
      {!! Form::label('dltvLevel', 'ไม่ได้ใช้การจัดการศึกษาทางไกลผ่านดาวเทียม', array('class' => 'control-label')) !!}
      {!! Form::text('dltvLevelDetail3','',array('class' => 'form-control','placeholder' => 'โปรดระบุเหตุผล')) !!}
    </div>
    <div class="form-group">
      <input type="radio" name="dltvLevel" id="dltvLevel4" value="4">
      {!! Form::label('dltvLevel', 'อื่นๆ:', array('class' => 'control-label')) !!}
      {!! Form::text('dltvLevelDetail4','',array('class' => 'form-control','placeholder' => 'โปรดระบุ')) !!}
    </div>
  </div>
</div>

<div id="place_select">

  <div class="container-fluid">
    <h4>2. ข้อมูลเกี่ยวกับชุดอุปกรณ์รับสัญญาณดาวเทียมของโรงเรียน</h4>
      <h5>2.1 จานรับสัญญาณดาวเทียมที่ใช้งานได้ จำนวน (ห้อง)</h5>
      <div class="col-xs-3">
        <div class="form-group">
          {!! Form::text('dltvSatelliteNum',$dltv->dltvSatelliteNum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="dltvSatelliteWant" id="" value="1">
          {!! Form::label('dltvSatelliteWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="dltvSatelliteWant" id="" value="2">
          {!! Form::label('dltvSatelliteWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>

        <div class="form-group" id="place_select2">
          {!! Form::label('dltvSatelliteWantNum', 'ต้องการจานรับสัญญาณดาวเทียม จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('dltvSatelliteWantNum',$dltv->dltvSatelliteWantNum,array('class' => 'form-control')) !!}
        </div>

        <h5>2.2 หัวรับสัญญาณดาวเทียม LNB(ชุด)</h5>
        <div class="form-group">
          {!! Form::text('dltvLnbNum',$dltv->dltvLnbNum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="dltvLnbWant" id="" value="1">
          {!! Form::label('dltvLnbWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="dltvLnbWant" id="" value="2">
          {!! Form::label('dltvLnbWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group" id="place_select3">
          {!! Form::label('dltvLnbWantNum', 'ต้องการหัวรับสัญญาณดาวเทียม LNB(ชุด)', array('class' => 'control-label')) !!}
          {!! Form::text('dltvLnbWantNum',$dltv->dltvLnbWantNum,array('class' => 'form-control')) !!}
        </div>
        <h5>2.3 เครื่องรับสัญญาณดาวเทียมที่ใช้งานได้ จำนวน(เครื่อง)</h5>
        <div class="form-group">
          {!! Form::text('dltvReceiverNum',$dltv->dltvReceiverNum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="dltvReceiverWant" id="dltvReceiverWant1" value="1">
          {!! Form::label('dltvReceiverWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="dltvReceiverWant" id="dltvReceiverWant2" value="2">
          {!! Form::label('dltvReceiverWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group" id="place_select4">
          {!! Form::label('dltvReceiverWantNum', 'ต้องการเครื่องรับสัญญาณดาวเทียม จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('dltvReceiverWantNum',$dltv->dltvReceiverWantNum,array('class' => 'form-control')) !!}
        </div>
      </div>
    </div>

  <div class="container-fluid">
    <h4>3. ข้อมูลเกี่ยวกับการรับสัญญาณดาวเทียม</h4>
    <div class="col-xs-8 col-md-6">
      <div class="form-group">
        <input type="radio" name="dltvProblem" id="dltvProblem1" value="1">
        {!! Form::label('dltvProblem', 'ไม่มีปัญหาการรับสัญญาณดาวเทียม', array('class' => 'control-label')) !!}
      </div>
      <div class="form-group">
        <input type="radio" name="dltvProblem" id="dltvProblem2" value="2">
        {!! Form::label('dltvProblem', 'มีปัญหาระบบการรับสัญญาณดาวเทียม', array('class' => 'control-label')) !!}

      <div id="place_select1">
        {!! Form::label('dltvProblemDetail', 'ปัญหาเกี่ยวกับระบบรับสัญญาณดาวเทียม', array('class' => 'control-label')) !!}
        {!! Form::textArea('dltvProblemDetail',$dltv->dltvProblemDetail,array('class' => 'form-control')) !!}
        {!! Form::label('dltvProblemFix', 'วิธีการ/ความต้องการในการแก้ปัญหาระบบรับสัญญาณดาวเทียม', array('class' => 'control-label')) !!}
        {!! Form::textArea('dltvProblemFix',$dltv->dltvProblemFix,array('class' => 'form-control')) !!}
      </div>

      </div>
    </div>
  </div>

  <div class="container-fluid">
    <h4>ภาพกิจกรรม DLTV จำนวน 4 ภาพ (ขนาดภาพความกว้างไม่เกิน 400 Pixel)</h4>
    <div class="col-xs-8 col-md-6">
      <div class="form-group">
        {!! Form::file('dltvPicture1',array('class' => 'form-control')) !!}
        {!! Form::text('dltvPictureDetail1','',array('class' => 'form-control','placeholder' => 'คำบรรยายภาพ')) !!}
      </div>
      <div class="form-group">
        {!! Form::file('dltvPicture2',array('class' => 'form-control')) !!}
        {!! Form::text('dltvPictureDetail2','',array('class' => 'form-control','placeholder' => 'คำบรรยายภาพ')) !!}
      </div>
      <div class="form-group">
        {!! Form::file('dltvPicture3',array('class' => 'form-control')) !!}
        {!! Form::text('dltvPictureDetail3','',array('class' => 'form-control','placeholder' => 'คำบรรยายภาพ')) !!}
      </div>
      <div class="form-group">
        {!! Form::file('dltvPicture4',array('class' => 'form-control')) !!}
        {!! Form::text('dltvPictureDetail4','',array('class' => 'form-control','placeholder' => 'คำบรรยายภาพ')) !!}
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="col-xs-6 col-md-4">
      <div class="form-group">
        {!! Form::label('saveUser', 'ลงชื่อ ผู้บันทึกข้อมูล', array('class' => 'control-label')) !!}
        {!! Form::text('saveUser',$dltv->saveUser,array('class' => 'form-control')) !!}
      </div>
      <div class="form-group">
        {!! Form::label('directerUser', 'ลงชื่อ ผู้อำนวยการโรงเรียน', array('class' => 'control-label')) !!}
        {!! Form::text('directerUser',$dltv->directerUser,array('class' => 'form-control')) !!}
      </div>
      <div class="form-group">
        {!! Form::label('telDirecter', 'หมายเลขโทรศัพท์ผู้อำนวยการโรงเรียน *', array('class' => 'control-label')) !!}
        {!! Form::text('telDirecter',$dltv->telDirecter,array('class' => 'form-control')) !!}
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
        if(valData==3 | valData==4){ // เปรียบเทียบค่า
            $("#place_select").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select").show();   //แสดงส่วนที่ต้องการ
        }
    });

    $(":radio[name='dltvProblem']").on("click",function(){
        var valData=$(this).val(); // เก็บค่า ไว้ในตัวแปร
        if(valData==1){ // เปรียบเทียบค่า
            $("#place_select1").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select1").show();   //แสดงส่วนที่ต้องการ
        }
    });

    $(":radio[name='dltvSatelliteWant']").on("click",function(){
        var valData=$(this).val(); // เก็บค่า ไว้ในตัวแปร
        if(valData==0){ // เปรียบเทียบค่า
            $("#place_select2").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select2").show();   //แสดงส่วนที่ต้องการ
        }
    });

    $(":radio[name='dltvLnbWant']").on("click",function(){
        var valData=$(this).val(); // เก็บค่า ไว้ในตัวแปร
        if(valData==0){ // เปรียบเทียบค่า
            $("#place_select3").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select3").show();   //แสดงส่วนที่ต้องการ
        }
    });

    $(":radio[name='dltvReceiverWant']").on("click",function(){
        var valData=$(this).val(); // เก็บค่า ไว้ในตัวแปร
        if(valData==0){ // เปรียบเทียบค่า
            $("#place_select4").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select4").show();   //แสดงส่วนที่ต้องการ
        }
    });

});
</script>

<div class="form-action" align="center">
  {!! Form::submit('บันทึกข้อมูล', array('class'=>'btn btn-success')) !!}
  @if(@$user[0]->permission == 0)
  {!! Html::link('dltv', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @else
  {!! Html::link('schooldltv', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @endif
  <br /><br /><br />
</div>
{!! Form::close() !!}

@stop
