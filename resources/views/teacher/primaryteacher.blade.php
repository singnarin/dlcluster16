@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลจำนวนครูและบุคลากร</h4></center>
@foreach($school as $school)
<table class="table table-bordered">
<thead>
    <th>ประเภทบุคลากร</th>
    <th>ชาย</th>
    <th>หญิง</th>
    <th>รวม</th>
</thead>
<tr>
  <td>ผู้อำนวยการ</td>
  <td>{{ $school->summDirector }}</td>
  <td>{{ $school->sumfDirector }}</td>
  <td>{{ ($school->summDirector) + ($school->sumfDirector) }}</td>
</tr>
<tr>
  <td>รองผู้อำนวยการ</td>
  <td>{{ $school->summDeputy }}</td>
  <td>{{ $school->sumfDeputy }}</td>
  <td>{{ ($school->summDeputy) + ($school->sumfDeputy) }}</td>
</tr>
<tr>
  <td>ครูประจำการ</td>
  <td>{{ $school->summRegular }}</td>
  <td>{{ $school->sumfRegular }}</td>
  <td>{{ ($school->summRegular) + ($school->sumfRegular) }}</td>
</tr>
<tr>
  <td>ครูอัตราจ้าง</td>
  <td>{{ $school->summRate }}</td>
  <td>{{ $school->sumfRate }}</td>
  <td>{{ ($school->summRate) + ($school->sumfRate) }}</td>
</tr>
<tr>
  <td>นักการภารโรง</td>
  <td>{{ $school->summJanitor }}</td>
  <td>{{ $school->sumfJanitor }}</td>
  <td>{{ ($school->summJanitor) + ($school->sumfJanitor) }}</td>
</tr>
<tr>
  <td>ครูโรงเรียนจ้าง</td>
  <td>{{ $school->summTemp }}</td>
  <td>{{ $school->sumfTemp }}</td>
  <td>{{ ($school->summTemp) + ($school->sumfTemp) }}</td>
</tr>
<tr>
  <td>รวม</td>
  <td>{{ ($school->summDirector)+($school->summDeputy)+($school->summRegular)+($school->summRate)+($school->summJanitor)+($school->summTemp) }}</td>
  <td>{{ ($school->sumfDirector)+($school->sumfDeputy)+($school->sumfRegular)+($school->sumfRate)+($school->sumfJanitor)+($school->sumfTemp) }}</td>
  <td>{{ ($school->summDirector)+($school->summDeputy)+($school->summRegular)+($school->summRate)+($school->summJanitor)+($school->summTemp)+($school->sumfDirector)+($school->sumfDeputy)+($school->sumfRegular)+($school->sumfRate)+($school->sumfJanitor)+($school->sumfTemp) }}</td>
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
  <td>{{$school->sumchildteacher}}</td>
</tr>
<tr>
  <td>ประถม</td>
  <td>{{$school->sumprimaryteacher}}</td>
</tr>
<tr>
  <td>มัธยมต้น</td>
  <td>{{$school->sumjuniorhighschool}}</td>
</tr>
<tr>
  <td>มัธยมปลาย</td>
  <td>{{$school->sumhighschoolteacher}}</td>
</tr>
<tr>
  <td>รวม</td>
  <td>{{($school->sumchildteacher)+($school->sumprimaryteacher)+($school->sumjuniorhighschool)+($school->sumhighschoolteacher)}}</td>
</tr>
<tr>
  <td colspan="2" align="center">
    {!! Html::link('#', 'Print', array('class'=>'btn btn-primary')) !!}
  </td>
</tr>
</table>
@endforeach

@stop
