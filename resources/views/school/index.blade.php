@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลพื้นฐาน</h4></center>
<table class="table table=bordered table-general">
  @foreach($school as $value)
  <tr>
    <td>รหัสโรงเรียน</td>
    <td>{{ $value->schoolName }}</td>
    <td>ชื่อโรงเรียน</td>
    <td>{{ $value->headSchool->name }}</td>
  </tr>
  @endforeach
</table>
@stop
