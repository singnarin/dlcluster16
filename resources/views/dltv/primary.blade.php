@extends('layouts.master')
@section('content')
<center><h4>ข้อมูล DLTV</h4></center>
<table class="table">
  <tr>
    <td class="col-md-5">1. ปัจจุบันโรงเรียนใช้ใช้การจัดการศึกษาทางไกลผ่านดาวเทียมในระดับชั้น :</td>
    <td class="col-md-7"><div >
      @if($school->dltvLevel == 'p1_p6')
        {{'ป.1 - ป.6'}}
      @elseif($school->dltvLevel == 'someone')
        {{'บางระดับชั้น'}}
      @elseif($school->dltvLevel == 'not')
        {{'ไม่ได้ใช้'}}
      @elseif($school->dltvLevel == 'other')
        {{'อื่นๆ'}}
      @endif
      {{$school->dltvLevelDetail}}
    </div></td>
  </tr>
  <tr>
    <td colspan="2">2. ข้อมูลเกี่ยวกับชุดอุปกรณ์รับสัญญาณดาวเทียมของโรงเรียน</td>
  </tr>
  <tr>
    <td>2.1 จานรับสัญญาณดาวเทียมที่ใช้งานได้ จำนวน : </td>
    <td>{{$school->dltvSatelliteNum}}  ห้อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->dltvSatelliteWant == 0)
        {{'เพียงพอ'}}
      @elseif($school->dltvSatelliteWant == 1)
        {{'ไม่เพียงพอ'}}
      @endif
    </td>
  </tr>
  <tr>
    <td>ต้องการจานรับสัญญาณดาวเทียม จำนวน :</td>
    <td>{{$school->dltvSatelliteWantNum}}  ชุด</td>
  </tr>
  <tr>
    <td>2.2 หัวรับสัญญาณดาวเทียม LNB จำนวน : </td>
    <td>{{$school->dltvLnbNum}}  ห้อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->dltvLnbWant == 0)
        {{'เพียงพอ'}}
      @elseif($school->dltvLnbWant == 1)
        {{'ไม่เพียงพอ'}}
      @endif
    </td>
  </tr>
  <tr>
    <td>ต้องการหัวรับสัญญาณดาวเทียม LNB จำนวน :</td>
    <td>{{$school->dltvLnbWantNum}}  ชุด</td>
  </tr>
  <tr>
    <td>2.3 เครื่องรับสัญญาณดาวเทียมที่ใช้งานได้ จำนวน : </td>
    <td>{{$school->dltvReceiverNum}}  ห้อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->dltvReceiverWant == 0)
        {{'เพียงพอ'}}
      @elseif($school->dltvReceiverWant == 1)
        {{'ไม่เพียงพอ'}}
      @endif
    </td>
  </tr>
  <tr>
    <td>ต้องการเครื่องรับสัญญาณดาวเทียม จำนวน :</td>
    <td>{{$school->dltvReceiverWantNum}}  ชุด</td>
  </tr>
  <tr>
    <td>3. ข้อมูลเกี่ยวกับการรับสัญญาณดาวเทียม :</td>
    <td>
      @if($school->dltvProblem == 1)
        ไม่มีปัญหาการรับสัญญาณดาวเทียม
      @else
        มีปัญหาการรับสัญญาณดาวเทียม
      @endif
    </td>
  </tr>
  @if($school->dltvProblem == 2)
  <tr>
    <td>ปัญหาเกี่ยวกับระบบรับสัญญาณดาวเทียม :</td>
    <td>{{$school->dltvProblemDetail}}</td>
  </tr>
  <tr>
    <td>วิธีการ/ความต้องการในการแก้ปัญหาระบบรับสัญญาณดาวเทียม :</td>
    <td>{{$school->dltvProblemFix}}</td>
  </tr>
  @endif
  <tr>
    <td colspan="2">ภาพกิจกรรม DLTV</td>
  </tr>
  <tr>
    <td align="center">{!! Html::image($school->dltvPicture1) !!}</td>
    <td align="center">{!! Html::image($school->dltvPicture2) !!}</td>
  </tr>
  <tr>
    <td align="center">{{$school->dltvPictureDetail1}}</td>
    <td align="center">{{$school->dltvPictureDetail2}}</td>
  </tr>
  <tr>
    <td align="center">{!! Html::image($school->dltvPicture3) !!}</td>
    <td align="center">{!! Html::image($school->dltvPicture3) !!}</td>
  </tr>
  <tr>
    <td align="center">{{$school->dltvPictureDetail4}}</td>
    <td align="center">{{$school->dltvPictureDetail4}}</td>
  </tr>
  <tr>
    <td>ชื่อผู้บันทึกข้อมูล :</td>
    <td>{{$school->saveUser}}</td>
  </tr>
  <tr>
    <td>ชื่อผู้อำนวยการโรงเรียน :</td>
    <td>{{$school->directerUser}}</td>
  </tr>
  <tr>
    <td>หมายเลขโทรศัพท์ผู้อำนวยการโรงเรียน :</td>
    <td>{{$school->telDirecter}}</td>
  </tr>
</table>
<div align="center">
  {!! Html::link('../dltvForm/'.$school->id, 'แก้ไขข้อมูล', array('class'=>'btn btn-primary')) !!}
</div>
<br />
<br />
@stop
