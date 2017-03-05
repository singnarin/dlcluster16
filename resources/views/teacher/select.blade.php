@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลครูและบุคลากร</h4></center>
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
            {!! Html::link('schoolteacherForm/'.$value->id, $value->id) !!}
          </td>
          <td>
            {!! Html::link('schoolteacherForm/'.$value->id, $value->School->schoolName) !!}
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
