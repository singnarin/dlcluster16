@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลเกี่ยวกับระบบไฟฟ้าโรงเรียน</h4></center>
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
            @if($value->electricitystatus == 1)
              {!! Html::link('primaryelectricityindex/'.$value->id, $value->id) !!}
            @else
              {{$value->id}}
            @endif
          </td>
          <td>
            @if($value->electricitystatus == 1)
              {!! Html::link('primaryelectricityindex/'.$value->id, $value->schoolName) !!}
            @else
              {{$value->schoolName}}
            @endif
          </td>
          <td>
            @if($value->electricitystatus == 1)
              {{"บันทึกข้อมูลแล้ว"}}
            @elseif($value->electricitystatus == 0)
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
