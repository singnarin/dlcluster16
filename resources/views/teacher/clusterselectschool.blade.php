@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลจำนวนครูและบุคลากร</h4></center>
<div align="center">
<div class="form-group">
  {!! Form::open(array('url' => 'schoolteachersearch', 'class' => 'form-inline')) !!}
    <div class="input-group">
      <div class="input-group-addon">ค้นหาตามรหัสโรงเรียน</div>
      {!! Form::text('id','',array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('ค้นหา', array('class'=>'btn btn-success')) !!}
    {!! Form::close( ) !!}<br />
    {!! Form::open(array('url' => 'schoolteachersearchp', 'class' => 'form-inline')) !!}
    <div class="input-group">
      <div class="input-group-addon">ค้นหาตามเขตพื้นที่การศึกษา</div>
      {!! Form::select('id', \App\HeadSchool::where('id', '<>', '16000000')->where('id', '<>', '16161616')->pluck('name', 'id')->toArray(), array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('ค้นหา', array('class'=>'btn btn-success')) !!}
    {!! Form::close( ) !!}
  </div>
</div>
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
            {!! Html::link('schoolteacherForm/'.$value->id, $value->id) !!}
          </td>
          <td>
            {!! Html::link('schoolteacherForm/'.$value->id, $value->schoolName) !!}
          </td>
          <td>
            @if($value->teacherstatus == 1)
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
