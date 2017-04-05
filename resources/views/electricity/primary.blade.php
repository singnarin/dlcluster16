@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลเกี่ยวกับระบบไฟฟ้าโรงเรียน</h4></center>
<table class="table">
  <tr>
    <td class="col-md-5">1. ระบบไฟฟ้าโรงเรียน :</td>
    <td class="col-md-7"><div>
      @if($school->electricitySystem == 'main')
        {{'ระบบไฟฟ้าจากการไฟฟ้า'}}
      @elseif($school->electricitySystem == 'other')
        {{'อื่นๆ'}}
      @endif
      {{$school->systemDetail}}
    </div></td>
  </tr>
  <tr>
    <td>2. ปัญหาเกี่ยวกับระบบไฟฟ้าโรงเรียน :</td>
    <td>
      @if($school->electricityProblem == 1)
        {{"ไม่มีปัญหาเกี่ยวกับระบบไฟฟ้าโรงเรียน"}}
      @elseif($school->electricityProblem == 2)
        {{"มีปัญหาเกี่ยวกับระบบไฟฟ้าโรงเรียน"}}
      @endif
    </td>
  </tr>
  @if($school->electricityProblem == 2)
  <tr>
    <td>ปัญหาเกี่ยวกับระบบไฟฟ้า :</td>
    <td>{{$school->problemDetail}}</td>
  </tr>
  <tr>
    <td>วิธีการ/ความต้องการในการแก้ปัญหาระบบไฟฟ้า :</td>
    <td>{{$school->problemFix}}</td>
  </tr>
  @endif
</table>
<br />
<br />
@stop
