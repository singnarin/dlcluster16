@extends('layouts.master')
@section('content')
<center><h4>ข้อมูล DLIT</h4></center>
<div align="center">
<div class="form-group">
  {!! Form::open(array('url' => 'schooldlitsearch', 'class' => 'form-inline')) !!}
    <div class="input-group">
      <div class="input-group-addon">ค้นหาตามรหัสโรงเรียน</div>
      {!! Form::text('id','',array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('ค้นหา', array('class'=>'btn btn-success')) !!}
    {!! Form::close( ) !!}<br />
    {!! Form::open(array('url' => 'schooldlitsearchp', 'class' => 'form-inline')) !!}
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
            @if($value->dlitstatus == 1)
              {!! Html::link('primarydlitindex/'.$value->id, $value->id) !!}
            @else
              {{$value->id}}
            @endif
          </td>
          <td>
            @if($value->dlitstatus == 1)
              {!! Html::link('primarydlitindex/'.$value->id, $value->schoolName) !!}
            @else
              {{$value->schoolName}}
            @endif
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
