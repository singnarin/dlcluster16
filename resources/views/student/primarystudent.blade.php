@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลจำนวนนักเรียน</h4></center>
@foreach($school as $school)
<table class="table table-bordered">
<thead>
    <th><div align="center">ระดับชั้น</div></th>
    <th><div align="center">ชาย</div></th>
    <th><div align="center">หญิง</div></th>
    <th><div align="center">รวม</div></th>
</thead>
<tr>
  <td>อนุบาล 1</td>
  <td>{{ $school->summo1 }}</td>
  <td>{{ $school->sumfo1 }}</td>
  <td>{{ ($school->summo1) + ($school->sumfo1) }}</td>
</tr>
<tr>
  <td>อนุบาล 2</td>
  <td>{{ $school->summo2 }}</td>
  <td>{{ $school->sumfo2 }}</td>
  <td>{{ ($school->summo2) + ($school->sumfo2) }}</td>
</tr>
<tr>
  <td>รวมปฐมวัย</td>
  <td>{{ ($school->summo1)+($school->summo2) }}</td>
  <td>{{ ($school->sumfo1)+($school->sumfo2) }}</td>
  <td>{{ ($school->summo1)+($school->summo2)+($school->sumfo1)+($school->sumfo2) }}</td>
</tr>
<tr>
  <td>ป.1</td>
  <td>{{ $school->summp1 }}</td>
  <td>{{ $school->sumfp1 }}</td>
  <td>{{ ($school->summp1) + ($school->sumfp1) }}</td>
</tr>
<tr>
  <td>ป.2</td>
  <td>{{ $school->summp2 }}</td>
  <td>{{ $school->sumfp2 }}</td>
  <td>{{ ($school->summp2) + ($school->sumfp2) }}</td>
</tr>
<tr>
  <td>ป.3</td>
  <td>{{ $school->summp3 }}</td>
  <td>{{ $school->sumfp3 }}</td>
  <td>{{ ($school->summp3) + ($school->sumfp3) }}</td>
</tr>
<tr>
  <td>ป.4</td>
  <td>{{ $school->summp4 }}</td>
  <td>{{ $school->sumfp4 }}</td>
  <td>{{ ($school->summp4) + ($school->sumfp4) }}</td>
</tr>
<tr>
  <td>ป.5</td>
  <td>{{ $school->summp5 }}</td>
  <td>{{ $school->sumfp5 }}</td>
  <td>{{ ($school->summp5) + ($school->sumfp5) }}</td>
</tr>
<tr>
  <td>ป.6</td>
  <td>{{ $school->summp6 }}</td>
  <td>{{ $school->sumfp6 }}</td>
  <td>{{ ($school->summp6) + ($school->sumfp6) }}</td>
</tr>
<tr>
  <td>รวมประถม</td>
  <td>{{ ($school->summp6)+($school->summp5)+($school->summp4)+($school->summp3)+($school->summp2)+($school->summp1) }}</td>
  <td>{{ ($school->sumfp6)+($school->sumfp5)+($school->sumfp4)+($school->sumfp3)+($school->sumfp2)+($school->sumfp1) }}</td>
  <td>{{ ($school->summp6)+($school->sumfp6)+($school->summp5)+($school->sumfp5)+($school->summp4)+($school->sumfp4)+($school->summp3)+($school->sumfp3)+($school->summp2)+($school->sumfp2)+($school->summp1)+($school->sumfp1) }}</td>
</tr>
<tr>
  <td>ม.1</td>
  <td>{{ $school->summm1 }}</td>
  <td>{{ $school->sumfm1 }}</td>
  <td>{{ ($school->summm1) + ($school->sumfm1) }}</td>
</tr>
<tr>
  <td>ม.2</td>
  <td>{{ $school->summm2 }}</td>
  <td>{{ $school->sumfm2 }}</td>
  <td>{{ ($school->summm2) + ($school->sumfm2) }}</td>
</tr>
<tr>
  <td>ม.3</td>
  <td>{{ $school->summm3 }}</td>
  <td>{{ $school->sumfm3 }}</td>
  <td>{{ ($school->summm3) + ($school->sumfm3) }}</td>
</tr>
<tr>
  <td>ม.4</td>
  <td>{{ $school->summm4 }}</td>
  <td>{{ $school->sumfm4 }}</td>
  <td>{{ ($school->summm4) + ($school->sumfm4) }}</td>
</tr>
<tr>
  <td>ม.5</td>
  <td>{{ $school->summm5 }}</td>
  <td>{{ $school->sumfm5 }}</td>
  <td>{{ ($school->summm5) + ($school->sumfm5) }}</td>
</tr>
<tr>
  <td>ม.6</td>
  <td>{{ $school->summm6 }}</td>
  <td>{{ $school->sumfm6 }}</td>
  <td>{{ ($school->summm6) + ($school->sumfm6) }}</td>
</tr>
<tr>
  <td>รวมมัธยม</td>
  <td>{{ ($school->summm6)+($school->summm5)+($school->summm4)+($school->summm3)+($school->summm2)+($school->summm1) }}</td>
  <td>{{ ($school->sumfm6)+($school->sumfm5)+($school->sumfm4)+($school->sumfm3)+($school->sumfm2)+($school->sumfm1)}}</td>
  <td>{{ ($school->summm6)+($school->sumfm6)+($school->summm5)+($school->sumfm5)+($school->summm4)+($school->sumfm4)+($school->summm3)+($school->sumfm3)+($school->summm2)+($school->sumfm2)+($school->summm1)+($school->sumfm1) }}</td>
</tr>
<tr>
  <td>รวมจำนวนนักเรียน</td>
  <td>{{ ($school->summm6)+($school->summm5)+($school->summm4)+($school->summm3)+($school->summm2)+($school->summm1)+($school->summp6)+($school->summp5)+($school->summp4)+($school->summp3)+($school->summp2)+($school->summp1)+($school->summo1)+($school->summo2) }}</td>
  <td>{{ ($school->sumfm6)+($school->sumfm5)+($school->sumfm4)+($school->sumfm3)+($school->sumfm2)+($school->sumfm1)+($school->sumfp6)+($school->sumfp5)+($school->sumfp4)+($school->sumfp3)+($school->sumfp2)+($school->sumfp1)+($school->sumfo1)+($school->sumfo2) }}</td>
  <td>{{ ($school->summm6)+($school->summm5)+($school->summm4)+($school->summm3)+($school->summm2)+($school->summm1)+($school->summp6)+($school->summp5)+($school->summp4)+($school->summp3)+($school->summp2)+($school->summp1)+($school->summo1)+($school->summo2)+($school->sumfm6)+($school->sumfm5)+($school->sumfm4)+($school->sumfm3)+($school->sumfm2)+($school->sumfm1)+($school->sumfp6)+($school->sumfp5)+($school->sumfp4)+($school->sumfp3)+($school->sumfp2)+($school->sumfp1)+($school->sumfo1)+($school->sumfo2) }}</td>
</tr>
<td colspan="4" align="center">
  {!! Html::link('#', 'Print', array('class'=>'btn btn-primary')) !!}
</td>
</table>
@endforeach
@stop
