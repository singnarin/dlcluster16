@extends('layouts.master')
@section('content')
<center><h4>ข้อมูล DLIT  ระดับเขตพื้นที่ </h4></center>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
<table class="table table=bordered table-chicken">
  <thead>
    <tr>
      <th>รหัส</th>
      <th>ชื่อเขตพื้นที่การศึกษา</th>
    </tr>
    <tbody>
      @foreach($school as $value)
        <tr>
          <td>
            {!! Html::link('clusterprimarydlits/'.$value->id, $value->id) !!}
          </td>
          <td>
            {!! Html::link('clusterprimarydlits/'.$value->id, $value->schoolName) !!}
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
