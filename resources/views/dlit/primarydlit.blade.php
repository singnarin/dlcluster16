@extends('layouts.master')
@section('content')
<center><h4>ข้อมูล dlit</h4></center>
<table class="table">
  <tr>
    <td class="col-md-5">1. ปัจจุบันโรงเรียนใช้้การจัดการศึกษาทางไกลผ่านเทคโนโลยีสารสนเทศในระดับ :</td>
    <td class="col-md-7"><div>
      @foreach($dlitLevel as $dlitLevel)
        @if($dlitLevel->dlitLevel == 'p1_p6')
          {{'ป.1 - ป.6 '}} จำนวน
          {{$dlitLevel->count_level }} โรงเรียน <br />
        @elseif($dlitLevel->dlitLevel == 'someone')
          {{'บางระดับชั้น '}} จำนวน
          {{$dlitLevel->count_level}} โรงเรียน <br />
        @elseif($dlitLevel->dlitLevel == 'not')
          {{'ไม่ได้ใช้ '}} จำนวน
          {{$dlitLevel->count_level}} โรงเรียน <br />
        @else($dlitLevel->dlitLevel == 'other')
          {{'อื่นๆ '}} จำนวน
          {{$dlitLevel->count_level}} โรงเรียน <br />
        @endif
      @endforeach
    </div></td>
  </tr>
  <tr>
    <td colspan="2">2. ข้อมูลเกี่ยวกับชุดอุปกรณ์เทคโนโลยีสารสนเทศของโรงเรียน</td>
  </tr>
  <tr>
    <td>2.1 เครื่องคอมพิวเตอร์ตั้งโต๊ะ(PC) ที่ใช้งานได้ จำนวน : </td>
    <td>{{$pcNum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($pcWant as $value)
        @if($value -> pcWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_pcWant}} โรงเรียน <br />
        @elseif($value -> pcWant == 2)
        {{'ไม่เพียงพอ  จำนวน' }}
        {{$value -> count_pcWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>2.2 คอมพิวเตอร์พกพา(Notebook) จำนวน : </td>
    <td>{{$nbNum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($nbWant as $value)
        @if($value -> nbWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_nbWant}} โรงเรียน <br />
        @elseif($value -> nbWant == 2)
        {{'ไม่เพียงพอ  จำนวน' }}
        {{$value -> count_nbWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>2.3 เครื่องคอมพิวเตอร์แม่ข่าย(Server) จำนวน : </td>
    <td>{{$svNum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($svWant as $value)
        @if($value -> svWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_svWant}} โรงเรียน <br />
        @elseif($value -> svWant == 2)
        {{'ไม่เพียงพอ  จำนวน' }}
        {{$value -> count_svWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>2.4 โทรทัศน์(TV) จำนวน : </td>
    <td>{{$tvnum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($tvWant as $value)
        @if($value -> tvWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_tvWant}} โรงเรียน <br />
        @elseif($value -> tvWant == 2)
        {{'ไม่เพียงพอ  จำนวน' }}
        {{$value -> count_tvWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>2.5 กล้อง จำนวน : </td>
    <td>{{$cameranum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($cameraWant as $value)
        @if($value -> cameraWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_cameraWant}} โรงเรียน <br />
        @elseif($value -> cameraWant == 2)
          {{'ไม่เพียงพอ  จำนวน' }}
          {{$value -> count_cameraWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>2.6 LCD Tablet จำนวน : </td>
    <td>{{$tabletnum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($tabletWant as $value)
        @if($value -> tabletWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_tabletWant}} โรงเรียน <br />
        @elseif($value -> tabletWant == 2)
        {{'ไม่เพียงพอ  จำนวน' }}
        {{$value -> count_tabletWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>2.7 Active Board จำนวน : </td>
    <td>{{$abnum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @foreach($abWant as $value)
        @if($value -> abWant == 1)
          {{'เพียงพอ  จำนวน' }}
          {{$value -> count_abWant}} โรงเรียน <br />
        @elseif($value -> abWant == 2)
        {{'ไม่เพียงพอ  จำนวน' }}
        {{$value -> count_abWant}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>

  <tr>
    <td>3. ข้อมูลบุคลากรที่มีความรู้ด้านเทคนิค/ซ่อมแซม :</td>
    <td>
      @foreach($dlitTechnical as $value)
        @if($value -> dlitTechnical == 1)
          {{'มีบุคลากรที่มีความรู้ด้านเทคนิค/ซ่อมแซม  จำนวน' }}
          {{$value -> count_dlitTechnical}} โรงเรียน <br />
        @elseif($value -> dlitTechnical == 2)
          {{'ไม่มีบุคลากรที่มีความรู้ด้านเทคนิค/ซ่อมแซม  จำนวน' }}
          {{$value -> count_dlitTechnical}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>3. ครูผู้สอนที่มีทักษะความพร้อมในการจัดการสอนและการใช้สื่อ :</td>
    <td>
      @foreach($dlitTeacher as $value)
        @if($value -> dlitTeacher == 1)
          {{'มีครูผู้สอนที่มีทักษะความพร้อมในการจัดการสอนและการใช้สื่อ  จำนวน' }}
          {{$value -> count_dlitTeacher}} โรงเรียน <br />
        @elseif($value -> dlitTeacher == 2)
          {{'ไม่มีครูผู้สอนที่มีทักษะความพร้อมในการจัดการสอนและการใช้สื่อ  จำนวน' }}
          {{$value -> count_dlitTeacher}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
  <tr>
    <td>ประสิทธิภาพการใช้งาน :</td>
    <td>
      @foreach($internet as $value)
        @if($value -> internet == 1)
          {{'ใช้การได้ดี  จำนวน' }}
          {{$value -> count_internet}} โรงเรียน <br />
        @elseif($value -> internet == 2)
          {{'ใช้การได้บางครั้ง  จำนวน' }}
          {{$value -> count_internet}} โรงเรียน
        @elseif($value -> internet == 3)
          {{'ใช้การไม่ได้เลย  จำนวน' }}
          {{$value -> count_internet}} โรงเรียน
        @endif
      @endforeach
    </td>
  </tr>
</table>
<br />
<br />
@stop
