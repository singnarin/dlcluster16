<?php $user = Session::get('user');?>
@extends('layouts.master')
@section('content')
<center><h3>สภาพการดำเนินงาน DLIT </h3></center>
{!! Form::open(array('dlit' => 'myUpload', 'enctype' => 'multipart/form-data')) !!}
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
  <h4>1. ปัจจุบันโรงเรียนใช้การจัดการศึกษาทางไกลผ่านเทคโนโลยีสารสนเทศในระดับชั้น</h4>
  <div class="col-xs-8 col-md-6">
    <div class="form-group">
      <input type="radio" name="dlitLevel" id="dlitLevel1" value="1">
      {!! Form::label('dlitLevel1', 'ป.1-ป.6', array('class' => 'control-label')) !!}
    </div>
    <div class="form-group">
      <input type="radio" name="dlitLevel" id="dlitLevel2" value="2">
      {!! Form::label('dlitLevel', 'บางระดับชั้น', array('class' => 'control-label')) !!}
      {!! Form::text('dlitLevelDetail2','',array('class' => 'form-control','placeholder' => 'โปรดระบุชั้น')) !!}
    </div>
    <div class="form-group">
      <input type="radio" name="dlitLevel" id="dlitLevel3" value="3">
      {!! Form::label('dlitLevel', 'ไม่ได้ใช้การจัดการศึกษาทางไกลผ่านดาวเทียม', array('class' => 'control-label')) !!}
      {!! Form::text('dlitLevelDetail3','',array('class' => 'form-control','placeholder' => 'โปรดระบุเหตุผล')) !!}
    </div>
    <div class="form-group">
      <input type="radio" name="dlitLevel" id="dlitLevel4" value="4">
      {!! Form::label('dlitLevel', 'อื่นๆ:', array('class' => 'control-label')) !!}
      {!! Form::text('dlitLevelDetail4','',array('class' => 'form-control','placeholder' => 'โปรดระบุ')) !!}
    </div>
  </div>
</div>

<div id="place_select">

  <div class="container-fluid">
    <h4>2. ข้อมูลเกี่ยวกับชุดอุปกรณ์เทคโนโลยีสารสนเทศของโรงเรียน</h4>
      <h5>2.1 เครื่องคอมพิวเตอร์ตั้งโต๊ะ(PC) ที่ใช้งานได้ จำนวน (เครื่อง)</h5>
      <div class="col-xs-6">
        <div class="form-group">
          {!! Form::text('pcNum',$dlit->pcNum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="pcWant" id="" value="1">
          {!! Form::label('pcWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="pcWant" id="" value="2">
          {!! Form::label('pcWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
<!--
        <div class="form-group" id="place_select2">
          {!! Form::label('pcWantNum', 'ต้องการเครื่องคอมพิวเตอร์ตั้งโต๊ะ(PC) จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('pcWantNum',$dlit->pcWantNum,array('class' => 'form-control')) !!}
        </div>
-->
        <h5>2.2 คอมพิวเตอร์พกพา(Notebook) จำนวน(เครื่อง)</h5>
        <div class="form-group">
          {!! Form::text('nbNum',$dlit->nbNum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="nbWant" id="" value="1">
          {!! Form::label('nbWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="nbWant" id="" value="2">
          {!! Form::label('nbWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
<!--
        <div class="form-group" id="place_select2">
          {!! Form::label('nbWantNum', 'ต้องการคอมพิวเตอร์พกพา(Notebook) จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('nbWantNum',$dlit->nbWantNum,array('class' => 'form-control')) !!}
        </div>
-->
        <h5>2.3 เครื่องคอมพิวเตอร์แม่ข่าย(Server) จำนวน(เครื่อง)</h5>
        <div class="form-group">
          {!! Form::text('svNum',$dlit->svNum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="svWant" id="" value="1">
          {!! Form::label('svWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="svWant" id="" value="2">
          {!! Form::label('svWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
<!--
        <div class="form-group" id="place_select2">
          {!! Form::label('svWantNum', 'เครื่องคอมพิวเตอร์แม่ข่าย(Server) จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('svWantNum',$dlit->svWantNum,array('class' => 'form-control')) !!}
        </div>
-->
        <h5>2.4 โทรทัศน์(TV) จำนวน(เครื่อง)</h5>
        <div class="form-group">
          {!! Form::text('tvnum',$dlit->tvnum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="tvWant" id="" value="1">
          {!! Form::label('tvWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="tvWant" id="" value="2">
          {!! Form::label('tvWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
<!--
        <div class="form-group" id="place_select2">
          {!! Form::label('tvWantNum', 'ต้องการโทรทัศน์(TV) จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('tvWantNum',$dlit->tvWantNum,array('class' => 'form-control')) !!}
        </div>
-->
        <h5>2.5 กล้อง จำนวน(เครื่อง)</h5>
        <div class="form-group">
          {!! Form::text('cameranum',$dlit->cameranum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="cameraWant" id="" value="1">
          {!! Form::label('cameraWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="cameraWant" id="" value="2">
          {!! Form::label('cameraWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
<!--
        <div class="form-group" id="place_select2">
          {!! Form::label('cameraWantNum', 'ต้องการกล้อง จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('cameraWantNum',$dlit->cameraWantNum,array('class' => 'form-control')) !!}
        </div>
-->
        <h5>2.6 LCD Tablet จำนวน(เครื่อง)</h5>
        <div class="form-group">
          {!! Form::text('tabletnum',$dlit->tabletnum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="tabletWant" id="" value="1">
          {!! Form::label('tabletWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="tabletWant" id="" value="2">
          {!! Form::label('tabletWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
<!--
        <div class="form-group" id="place_select2">
          {!! Form::label('tabletWantNum', 'ต้องการ LCD Tablet จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('tabletWantNum',$dlit->tabletWantNum,array('class' => 'form-control')) !!}
        </div>
-->
        <h5>2.7 Active Board จำนวน(เครื่อง)</h5>
        <div class="form-group">
          {!! Form::text('abnum',$dlit->abnum,array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="abWant" id="" value="1">
          {!! Form::label('abWant', 'เพียงพอ', array('class' => 'control-label')) !!}
        </div>
        <div class="form-group">
          <input type="radio" name="abWant" id="" value="2">
          {!! Form::label('abWant', 'ไม่เพียงพอ', array('class' => 'control-label')) !!}
        </div>
<!--
        <div class="form-group" id="place_select2">
          {!! Form::label('abWantNum', 'ต้องการ Active Board จำนวน', array('class' => 'control-label')) !!}
          {!! Form::text('abWantNum',$dlit->abWantNum,array('class' => 'form-control')) !!}
        </div>
-->
      </div>
    </div>

  <div class="container-fluid">
    <h4>3. มีบุคลากรที่มีความรู้ด้านเทคนิค/ซ่อมแซม หรือไม่</h4>
    <div class="col-xs-8 col-md-6">
      <div class="form-group">
        <input type="radio" name="dlitTechnical" id="dlitTechnical" value="1">
        {!! Form::label('dlitTechnical', 'ไม่มีบุคลากร', array('class' => 'control-label')) !!}
      </div>
      <div class="form-group">
        <input type="radio" name="dlitTechnical" id="dlitTachnical2" value="2">
        {!! Form::label('dlitTechnical', 'มีบุคลากร', array('class' => 'control-label')) !!}
      <div id="place_select1">
        {!! Form::label('dlitTechnicalNum', 'จำนวนบุคลากรที่มีความรู้ด้านเทคนิค/ซ่อมแซม', array('class' => 'control-label')) !!}
        {!! Form::text('dlitTechnicalNum',$dlit->dlitTechnicalNum,array('class' => 'form-control')) !!}
      </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <h4>4. มีครูผู้สอนที่มีทักษะความพร้อมในการจัดการสอนและการใช้สื่อ หรือไม่</h4>
    <div class="col-xs-8 col-md-6">
      <div class="form-group">
        <input type="radio" name="dlitTeacher" id="dlitTeacher" value="1">
        {!! Form::label('dlitTeacher', 'ไม่มีบุคลากร', array('class' => 'control-label')) !!}
      </div>
      <div class="form-group">
        <input type="radio" name="dlitTeacher" id="dlitTeacher" value="2">
        {!! Form::label('dlitTeacher', 'มีบุคลากร', array('class' => 'control-label')) !!}
      <div id="place_select2">
        {!! Form::label('dlitTeacherNum', 'จำนวนครูผู้สอนที่มีทักษะความพร้อมในการจัดการสอนและการใช้สื่อ', array('class' => 'control-label')) !!}
        {!! Form::text('dlitTeacherNum',$dlit->dlitTeacherNum,array('class' => 'form-control')) !!}
      </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <h4>5. เครือข่ายอินเทอร์เน็ตที่มีอยู่ปัจจุบัน</h4>
    <div class="col-xs-8 col-md-6">
      <div class="form-group">
        {!! Form::checkbox('isp[]', 'uninet') !!}
        {!! Form::label('isp', 'UniNet', array('class' => 'control-label')) !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('isp[]', 'MoeNet') !!}
        {!! Form::label('isp', 'MoeNet', array('class' => 'control-label')) !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('isp[]', 'other') !!}
        {!! Form::label('isp', 'other', array('class' => 'control-label')) !!}
        {!! Form::text('ispDetail','',array('class' => 'form-control','placeholder' => 'โปรดระบุ')) !!}
      </div>
      <div class="form-group">
        {!! Form::label('internet', 'ประสิทธิภาพการใช้งาน', array('class' => 'control-label')) !!}
      </div>
      <div class="form-group">
        <input type="radio" name="internet" id="internet" value="1">
        {!! Form::label('internet', 'ใช้การได้ดี', array('class' => 'control-label')) !!}
      </div>
      <div class="form-group">
        <input type="radio" name="internet" id="internet" value="2">
        {!! Form::label('internet', 'ใช้การได้บางครั้ง', array('class' => 'control-label')) !!}
      </div>
      <div class="form-group">
        <input type="radio" name="internet" id="internet" value="3">
        {!! Form::label('internet', 'ใช้การไม่ได้เลย', array('class' => 'control-label')) !!}
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <h4>ภาพกิจกรรม DLIT จำนวน 4 ภาพ</h4>
    <div class="col-xs-8 col-md-6">
      <div class="form-group">
        {!! Form::file('dlitPicture1',array('class' => 'form-control')) !!}
        {!! Form::text('dlitPictureDetail1','',array('class' => 'form-control','placeholder' => 'คำบรรยายภาพ')) !!}
      </div>
      <div class="form-group">
        {!! Form::file('dlitPicture2',array('class' => 'form-control')) !!}
        {!! Form::text('dlitPictureDetail2','',array('class' => 'form-control','placeholder' => 'คำบรรยายภาพ')) !!}
      </div>
      <div class="form-group">
        {!! Form::file('dlitPicture3',array('class' => 'form-control')) !!}
        {!! Form::text('dlitPictureDetail3','',array('class' => 'form-control','placeholder' => 'คำบรรยายภาพ')) !!}
      </div>
      <div class="form-group">
        {!! Form::file('dlitPicture4',array('class' => 'form-control')) !!}
        {!! Form::text('dlitPictureDetail4','',array('class' => 'form-control','placeholder' => 'คำบรรยายภาพ')) !!}
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="col-xs-6 col-md-4">
      <div class="form-group">
        {!! Form::label('saveUser', 'ลงชื่อ ผู้บันทึกข้อมูล', array('class' => 'control-label')) !!}
        {!! Form::text('saveUser',$dlit->saveUser,array('class' => 'form-control')) !!}
      </div>
      <div class="form-group">
        {!! Form::label('directerUser', 'ลงชื่อ ผู้อำนวยการโรงเรียน', array('class' => 'control-label')) !!}
        {!! Form::text('directerUser',$dlit->directerUser,array('class' => 'form-control')) !!}
      </div>
      <div class="form-group">
        {!! Form::label('telDirecter', 'หมายเลขโทรศัพท์ผู้อำนวยการโรงเรียน *', array('class' => 'control-label')) !!}
        {!! Form::text('telDirecter',$dlit->telDirecter,array('class' => 'form-control')) !!}
      </div>
    </div>
  </div>

</div>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<!--<script type="text/javascript" src="js.js"></script>  -->
<script type="text/javascript">
$(function(){
    // เมื่อ radio ชื่อว่า myradio ถูก คลิก
    $(":radio[name='dlitLevel']").on("click",function(){
        var valData=$(this).val(); // เก็บค่า ไว้ในตัวแปร
        if(valData==3 | valData==4){ // เปรียบเทียบค่า
            $("#place_select").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select").show();   //แสดงส่วนที่ต้องการ
        }
    });

    $(":radio[name='dlitTechnical']").on("click",function(){
        var valData=$(this).val(); // เก็บค่า ไว้ในตัวแปร
        if(valData==1){ // เปรียบเทียบค่า
            $("#place_select1").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select1").show();   //แสดงส่วนที่ต้องการ
        }
    });

    $(":radio[name='dlitTeacher']").on("click",function(){
        var valData=$(this).val(); // เก็บค่า ไว้ในตัวแปร
        if(valData==1){ // เปรียบเทียบค่า
            $("#place_select2").hide(); // ซ่อนส่วนที่ต้องการ
        }else{
            $("#place_select2").show();   //แสดงส่วนที่ต้องการ
        }
    });

});
</script>

<div class="form-action" align="center">
  {!! Form::submit('บันทึกข้อมูล', array('class'=>'btn btn-success')) !!}
  @if(@$user[0]->permission == 0)
  {!! Html::link('dlit', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @else
  {!! Html::link('schooldlit', 'ยกเลิก', array('class'=>'btn btn-primary')) !!}
  @endif
  <br /><br /><br />
</div>
{!! Form::close() !!}

@stop
