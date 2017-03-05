@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลจำนวนครูและบุคลากร</h4></center>
<table class="table table-bordered">
<thead>
    <th>ประเภทบุคลากร</th>
    <th>ชาย</th>
    <th>หญิง</th>
    <th>รวม</th>
</thead>
<tr>
  <td>ผู้อำนวยการ</td>
  <td>{{ $school->mDirector }}</td>
  <td>{{ $school->fDirector }}</td>
  <td>{{ ($school->mDirector) + ($school->fDirector) }}</td>
</tr>
<tr>
  <td>รองผู้อำนวยการ</td>
  <td>{{ $school->mDeputy }}</td>
  <td>{{ $school->fDeputy }}</td>
  <td>{{ ($school->mDeputy) + ($school->fDeputy) }}</td>
</tr>
<tr>
  <td>ครูประจำการ</td>
  <td>{{ $school->mRegular }}</td>
  <td>{{ $school->fRegular }}</td>
  <td>{{ ($school->mRegular) + ($school->fRegular) }}</td>
</tr>
<tr>
  <td>ครูอัตราจ้าง</td>
  <td>{{ $school->mRate }}</td>
  <td>{{ $school->fRate }}</td>
  <td>{{ ($school->mRate) + ($school->fRate) }}</td>
</tr>
<tr>
  <td>นักการภารโรง</td>
  <td>{{ $school->mJanitor }}</td>
  <td>{{ $school->fJanitor }}</td>
  <td>{{ ($school->mJanitor) + ($school->fJanitor) }}</td>
</tr>
<tr>
  <td>ครูโรงเรียนจ้าง</td>
  <td>{{ $school->mTemp }}</td>
  <td>{{ $school->fTemp }}</td>
  <td>{{ ($school->mTemp) + ($school->fTemp) }}</td>
</tr>
<tr>
  <td>รวม</td>
  <td>{{ ($school->mDirector)+($school->mDeputy)+($school->mRegular)+($school->mRate)+($school->mJanitor)+($school->mTemp) }}</td>
  <td>{{ ($school->fDirector)+($school->fDeputy)+($school->fRegular)+($school->fRate)+($school->fJanitor)+($school->fTemp) }}</td>
  <td>{{ ($school->mDirector)+($school->mDeputy)+($school->mRegular)+($school->mRate)+($school->mJanitor)+($school->mTemp)+($school->fDirector)+($school->fDeputy)+($school->fRegular)+($school->fRate)+($school->fJanitor)+($school->fTemp) }}</td>
</tr>
</table>
<center><h4>การสอนของครูตามแผนการสอน</h4></h4></center>
<table class="table table-bordered">
<thead>
    <th>ระดับชั้น</th>
    <th>จำนวนครูผู้สอน</th>
</thead>
<tr>
  <td>ปฐมวัย</td>
  <td>{{$school->childteacher}}</td>
</tr>
<tr>
  <td>ประถม</td>
  <td>{{$school->primaryteacher}}</td>
</tr>
<tr>
  <td>มัธยมต้น</td>
  <td>{{$school->juniorhighschool}}</td>
</tr>
<tr>
  <td>มัธยมปลาย</td>
  <td>{{$school->highschoolteacher}}</td>
</tr>
<tr>
  <td>รวม</td>
  <td>{{($school->childteacher)+($school->primaryteacher)+($school->juniorhighschool)+($school->highschoolteacher)}}</td>
</tr>
<tr>
  <td colspan="2" align="center">
    {!! Html::link('../teacherForm/'.$school->id, 'แก้ไขข้อมูล', array('class'=>'btn btn-primary')) !!}
  </td>
</tr>
</table>


@stop
