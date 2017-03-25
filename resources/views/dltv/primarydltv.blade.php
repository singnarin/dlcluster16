@extends('layouts.master')
@section('content')
<center><h4>ข้อมูล DLTV</h4></center>
@foreach($school as $school)
  @if($school->dltvLevel == 'p1_p6')
    {{'ป.1 - ป.6 :'}}
    {{$school->count_level}}
  @elseif($school->dltvLevel == 'someone')
    {{'บางระดับชั้น :'}}
    {{$school->count_level}}
  @elseif($school->dltvLevel == 'not')
    {{'บางระดับชั้น :'}}
    {{$school->count_level}}
  @else($school->dltvLevel == 'other')
    {{'อื่นๆ :'}}
    {{$school->count_level}}
  @endif
@endforeach
<div align="center">
  {!! Html::link('../dltvForm/'.$school->id, 'แก้ไขข้อมูล', array('class'=>'btn btn-primary')) !!}
</div>
<br />
<br />
@stop
