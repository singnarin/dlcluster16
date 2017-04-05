@extends('layouts.master')
@section('content')
<center><h4>ข้อมูลเกี่ยวกับระบบไฟฟ้าโรงเรียน</h4></center>
<table class="table">
  <tr>
    <td class="col-md-5">1. ระบบไฟฟ้าโรงเรียน :</td>
    <td class="col-md-7"><div>
      @foreach($electricitySystem as $value)
        @if($value->electricitySystem == 'main')
          {{'ระบบไฟฟ้าจากการไฟฟ้า'}} จำนวน
          {{$value->count_system }} โรงเรียน <br />
        @elseif($value->electricitySystem == 'other')
          {{'อื่นๆ '}} จำนวน
          {{$value->count_system}} โรงเรียน <br />
        @endif
      @endforeach
    </div></td>
  </tr>
  <tr>
    <td class="col-md-5">2. ปัญหาเกี่ยวกับระบบไฟฟ้าโรงเรียน :</td>
    <td class="col-md-7"><div>
      @foreach($electricityProblem as $value)
        @if($value->electricityProblem == '1')
          {{'มีปัญหาเกี่ยวกับระบบไฟฟ้าโรงเรียน'}} จำนวน
          {{$value->count_problem }} โรงเรียน <br />
        @elseif($value->electricityProblem == '2')
          {{'ไมีมีปัญหาเกี่ยวกับระบบไฟฟ้าโรงเรียน '}} จำนวน
          {{$value->count_problem}} โรงเรียน <br />
        @endif
      @endforeach
    </div></td>
  </tr>
</table>
<br />
<br />
@stop
