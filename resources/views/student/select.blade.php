@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลครูและบุคลากร</h4></center>
<div class="row">
  <div class="col-md-6 col-md-offset-3" align="center">
    {{"บันทึกข้อมูลแล้ว : " .$school_ok. "  โรงเรียน ยังไม่ได้บันทึกข้อมูล :" .$school_not. "  โรงเรียน"}}
  </div>
  <div class="col-md-6 col-md-offset-3">
<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>รหัสโรงเรียน</th>
      <th>ชื่อโรงเรียน</th>
      <th>สถานะการบันทึกข้อมูล</th>
    </tr>
    <tbody>
      @foreach($school as $value)
        <tr>
          <td>
            {!! Html::link('schoolstudentForm/'.$value->id, $value->id) !!}
          </td>
          <td>
            {!! Html::link('schoolstudentForm/'.$value->id, $value->schoolName) !!}
          </td>
          <td>
            @if($value->studentstatus == 1)
              {{"บันทึกข้อมูลแล้ว"}}
            @else
              {{"ยังไม่ได้บันทึกข้อมูล"}}
            @endif
          </td>
        </tr>
      @endforeach
    </tbody>
  </thead>
</table>
<?php echo $school->render() ;?>
</div>
</div>
@stop
