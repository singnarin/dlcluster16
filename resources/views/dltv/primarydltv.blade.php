@extends('layouts.master')
@section('content')
<center><h4>ข้อมูล DLTV</h4></center>
<table class="table">
  <tr>
    <td class="col-md-5">1. ปัจจุบันโรงเรียนใช้ใช้การจัดการศึกษาทางไกลผ่านดาวเทียมในระดับชั้น :</td>
    <td class="col-md-7"><div >
      @foreach($dltvLevel as $dltvLevel)
        @if($dltvLevel->dltvLevel == 'p1_p6')
          {{'ป.1 - ป.6 '}} จำนวน
          {{$dltvLevel->count_level }} โรงเรียน <br />
        @elseif($dltvLevel->dltvLevel == 'someone')
          {{'บางระดับชั้น '}} จำนวน
          {{$dltvLevel->count_level}} โรงเรียน <br />
        @elseif($dltvLevel->dltvLevel == 'not')
          {{'ไม่ได้ใช้ '}} จำนวน
          {{$dltvLevel->count_level}} โรงเรียน <br />
        @else($dltvLevel->dltvLevel == 'other')
          {{'อื่นๆ '}} จำนวน
          {{$dltvLevel->count_level}} โรงเรียน <br />
        @endif
      @endforeach
    </div></td>
  </tr>
  <tr>
    <td colspan="2">2. ข้อมูลเกี่ยวกับชุดอุปกรณ์รับสัญญาณดาวเทียมของโรงเรียน</td>
  </tr>
  <tr>
    <td>2.1 จานรับสัญญาณดาวเทียมที่ใช้งานได้ จำนวน : </td>
    <td> {{$dltvSatelliteNum}}  ห้อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($dltvSatelliteWant as $value)
        @if($value -> dltvSatelliteWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_dltvSatelliteWant}} โรงเรียน <br />
        @elseif($value -> dltvSatelliteWant == 2)
        {{'ไม่เพียงพอ  จำนวน' }}
        {{$value -> count_dltvSatelliteWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>ต้องการจานรับสัญญาณดาวเทียม จำนวน :</td>
    <td> {{$dltvSatelliteWantNum}}  ชุด</td>
  </tr>
  <tr>
    <td>2.2 หัวรับสัญญาณดาวเทียม LNB จำนวน : </td>
    <td> {{$dltvLnbNum}}  ห้อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($dltvLnbWant as $value)
        @if($value -> dltvLnbWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_dltvLnbWant}} โรงเรียน <br />
        @elseif($value -> dltvLnbWant ==2)
          {{'ไม่เพียงพอ  จำนวน' }}
          {{$value -> count_dltvLnbWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>ต้องการหัวรับสัญญาณดาวเทียม LNB จำนวน :</td>
    <td> {{$dltvLnbWantNum}}  ชุด</td>
  </tr>
  <tr>
    <td>2.3 เครื่องรับสัญญาณดาวเทียมที่ใช้งานได้ จำนวน : </td>
    <td> {{$dltvReceiverNum}}  ห้อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($dltvReceiverWant as $value)
        @if($value -> dltvReceiverWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_dltvReceiverWant}} โรงเรียน <br />
        @elseif($value -> dltvReceiverWant == 2)
        {{'ไม่เพียงพอ  จำนวน' }}
        {{$value -> count_dltvReceiverWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>ต้องการเครื่องรับสัญญาณดาวเทียม จำนวน :</td>
    <td> {{$dltvReceiverWantNum}}  ชุด</td>
  </tr>
  <tr>
    <td>3. ข้อมูลเกี่ยวกับการรับสัญญาณดาวเทียม :</td>
    <td>@foreach($dltvProblem as $value)
      @if($value -> dltvProblem == 1)
        {{'มีปัญหา  จำนวน' }}
        {{$value -> count_dltvProblem}} โรงเรียน <br />
      @elseif($value -> dltvProblem == 2)
      {{'ไม่มีปัญหา  จำนวน' }}
      {{$value -> count_dltvProblem}} โรงเรียน
      @endif
    @endforeach
  </td>
  </tr>
</table>
<br />
<br />
@stop
