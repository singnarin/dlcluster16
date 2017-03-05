@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลพื้นฐาน</h4></center>
<table class="table table=bordered table-general">
  <tr>
    <td>รหัสโรงเรียน : {{ $school->id }}</td>
    <td colspan="2">ชื่อโรงเรียน : {{ $school->schoolName }}</td>
  </tr>
  <tr>
    <td>เลขที่ : {{ $school->no }}</td>
    <td>หมู่ที่ : {{ $school->moo }}</td>
    <td>ตำบล : {{ $school->tambol }}</td>
  </tr>
  <tr>
    <td>อำเภอ : {{ $school->district }}</td>
    <td>จังหวัด : {{ $school->province }}</td>
    <td>โทรศัพท์ : {{ $school->tel }}</td>
  </tr>
  <tr>
    <td>E-Mail : {{ $school->email }}</td>
    <td>สังกัด : {{ $school->headSchool->name }}</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3" align="center">
      {!! Html::link('../generalForm/'.$school->id, 'แก้ไขข้อมูล', array('class'=>'btn btn-primary')) !!}
    </td>
  </tr>
</table>


@stop
