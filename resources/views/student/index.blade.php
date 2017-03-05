@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลจำนวนนักเรียน</h4></center>
<table class="table table-bordered">
<thead>
    <th><div align="center">ระดับชั้น</div></th>
    <th><div align="center">ชาย</div></th>
    <th><div align="center">หญิง</div></th>
    <th><div align="center">รวม</div></th>
</thead>
<tr>
  <td>อนุบาล 1</td>
  <td>{{ $school->mo1 }}</td>
  <td>{{ $school->fo1 }}</td>
  <td>{{ ($school->mo1) + ($school->fo1) }}</td>
</tr>
<tr>
  <td>อนุบาล 2</td>
  <td>{{ $school->mo2 }}</td>
  <td>{{ $school->fo2 }}</td>
  <td>{{ ($school->mo2) + ($school->fo2) }}</td>
</tr>
<tr>
  <td>รวมปฐมวัย</td>
  <td>{{ ($school->mo1)+($school->mo2) }}</td>
  <td>{{ ($school->fo1)+($school->fo2) }}</td>
  <td>{{ ($school->mo1)+($school->mo2)+($school->fo1)+($school->fo2) }}</td>
</tr>
<tr>
  <td>ป.1</td>
  <td>{{ $school->mp1 }}</td>
  <td>{{ $school->fp1 }}</td>
  <td>{{ ($school->mp1) + ($school->fp1) }}</td>
</tr>
<tr>
  <td>ป.2</td>
  <td>{{ $school->mp2 }}</td>
  <td>{{ $school->fp2 }}</td>
  <td>{{ ($school->mp2) + ($school->fp2) }}</td>
</tr>
<tr>
  <td>ป.3</td>
  <td>{{ $school->mp3 }}</td>
  <td>{{ $school->fp3 }}</td>
  <td>{{ ($school->mp3) + ($school->fp3) }}</td>
</tr>
<tr>
  <td>ป.4</td>
  <td>{{ $school->mp4 }}</td>
  <td>{{ $school->fp4 }}</td>
  <td>{{ ($school->mp4) + ($school->fp4) }}</td>
</tr>
<tr>
  <td>ป.5</td>
  <td>{{ $school->mp5 }}</td>
  <td>{{ $school->fp5 }}</td>
  <td>{{ ($school->mp5) + ($school->fp5) }}</td>
</tr>
<tr>
  <td>ป.6</td>
  <td>{{ $school->mp6 }}</td>
  <td>{{ $school->fp6 }}</td>
  <td>{{ ($school->mp6) + ($school->fp6) }}</td>
</tr>
<tr>
  <td>รวมประถม</td>
  <td>{{ ($school->mp6)+($school->mp5)+($school->mp4)+($school->mp3)+($school->mp2)+($school->mp1) }}</td>
  <td>{{ ($school->fp6)+($school->fp5)+($school->fp4)+($school->fp3)+($school->fp2)+($school->fp1) }}</td>
  <td>{{ ($school->mp6)+($school->fp6)+($school->mp5)+($school->fp5)+($school->mp4)+($school->fp4)+($school->mp3)+($school->fp3)+($school->mp2)+($school->fp2)+($school->mp1)+($school->fp1) }}</td>
</tr>
<tr>
  <td>ม.1</td>
  <td>{{ $school->mm1 }}</td>
  <td>{{ $school->fm1 }}</td>
  <td>{{ ($school->mm1) + ($school->fm1) }}</td>
</tr>
<tr>
  <td>ม.2</td>
  <td>{{ $school->mm2 }}</td>
  <td>{{ $school->fm2 }}</td>
  <td>{{ ($school->mm2) + ($school->fm2) }}</td>
</tr>
<tr>
  <td>ม.3</td>
  <td>{{ $school->mm3 }}</td>
  <td>{{ $school->fm3 }}</td>
  <td>{{ ($school->mm3) + ($school->fm3) }}</td>
</tr>
<tr>
  <td>ม.4</td>
  <td>{{ $school->mm4 }}</td>
  <td>{{ $school->fm4 }}</td>
  <td>{{ ($school->mm4) + ($school->fm4) }}</td>
</tr>
<tr>
  <td>ม.5</td>
  <td>{{ $school->mm5 }}</td>
  <td>{{ $school->fm5 }}</td>
  <td>{{ ($school->mm5) + ($school->fm5) }}</td>
</tr>
<tr>
  <td>ม.6</td>
  <td>{{ $school->mm6 }}</td>
  <td>{{ $school->fm6 }}</td>
  <td>{{ ($school->mm6) + ($school->fm6) }}</td>
</tr>
<tr>
  <td>รวมมัธยม</td>
  <td>{{ ($school->mm6)+($school->mm5)+($school->mm4)+($school->mm3)+($school->mm2)+($school->mm1) }}</td>
  <td>{{ ($school->fm6)+($school->fm5)+($school->fm4)+($school->fm3)+($school->fm2)+($school->fm1)}}</td>
  <td>{{ ($school->mm6)+($school->fm6)+($school->mm5)+($school->fm5)+($school->mm4)+($school->fm4)+($school->mm3)+($school->fm3)+($school->mm2)+($school->fm2)+($school->mm1)+($school->fm1) }}</td>
</tr>
<tr>
  <td>รวมจำนวนนักเรียน</td>
  <td>{{ ($school->mm6)+($school->mm5)+($school->mm4)+($school->mm3)+($school->mm2)+($school->mm1)+($school->mp6)+($school->mp5)+($school->mp4)+($school->mp3)+($school->mp2)+($school->mp1)+($school->mo1)+($school->mo2) }}</td>
  <td>{{ ($school->fm6)+($school->fm5)+($school->fm4)+($school->fm3)+($school->fm2)+($school->fm1)+($school->fp6)+($school->fp5)+($school->fp4)+($school->fp3)+($school->fp2)+($school->fp1)+($school->fo1)+($school->fo2) }}</td>
  <td>{{ ($school->mm6)+($school->mm5)+($school->mm4)+($school->mm3)+($school->mm2)+($school->mm1)+($school->mp6)+($school->mp5)+($school->mp4)+($school->mp3)+($school->mp2)+($school->mp1)+($school->mo1)+($school->mo2)+($school->fm6)+($school->fm5)+($school->fm4)+($school->fm3)+($school->fm2)+($school->fm1)+($school->fp6)+($school->fp5)+($school->fp4)+($school->fp3)+($school->fp2)+($school->fp1)+($school->fo1)+($school->fo2) }}</td>
</tr>
<td colspan="4" align="center">
  {!! Html::link('../studentForm/'.$school->id, 'แก้ไขข้อมูล', array('class'=>'btn btn-primary')) !!}
</td>
</table>

@stop
