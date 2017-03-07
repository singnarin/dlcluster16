@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลพื้นฐาน</h4></center>
{!! Form::open(array('url' => 'schoolgeneralsearch', 'class' => 'form-inline')) !!}
<div align="center">
<div class="form-group">
    <div class="input-group">
      <div class="input-group-addon">ค้นหาตามรหัสเขตพื้นที่การศึกษา - รหัสโรงเรียน</div>
      {!! Form::text('id','',array('class' => 'form-control')) !!}
    </div>
  </div>
{!! Form::submit('ค้นหา', array('class'=>'btn btn-success')) !!}
{!! Form::close( ) !!}
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>รหัสโรงเรียน</th>
      <th>ชื่อโรงเรียน</th>
    </tr>
    <tbody>
      @foreach($school as $value)
        <tr>
          <td>
            {!! Html::link('primarygeneralForm/'.$value->id, $value->id) !!}
          </td>
          <td>
            {!! Html::link('primarygeneralForm/'.$value->id, $value->schoolName) !!}
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
