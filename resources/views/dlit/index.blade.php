@extends('layouts.master')
@section('content')
<center><h4>ข้อมูล dlit</h4></center>
<table class="table">
  <tr>
    <td class="col-md-5">1. ปัจจุบันโรงเรียนใช้้การจัดการศึกษาทางไกลผ่านเทคโนโลยีสารสนเทศในระดับ :</td>
    <td class="col-md-7"><div>
      @if($school->dlitLevel == 'p1_p6')
        {{'ป.1 - ป.6'}}
      @elseif($school->dlitLevel == 'someone')
        {{'บางระดับชั้น'}}
      @elseif($school->dlitLevel == 'not')
        {{'ไม่ได้ใช้'}}
      @elseif($school->dlitLevel == 'other')
        {{'อื่นๆ'}}
      @endif
      {{$school->dlitLevelDetail}}
    </div></td>
  </tr>
  <tr>
    <td colspan="2">2. ข้อมูลเกี่ยวกับชุดอุปกรณ์เทคโนโลยีสารสนเทศของโรงเรียน</td>
  </tr>
  <tr>
    <td>2.1 เครื่องคอมพิวเตอร์ตั้งโต๊ะ(PC) ที่ใช้งานได้ จำนวน : </td>
    <td>{{$school->pcNum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->pcWant == 1)
        {{"เพียงพอ"}}
      @elseif($school->pcWant == 2)
        {{"ไม่เพียงพอ"}}
      @endif
    </td>
  </tr>
  <tr>
    <td>2.2 คอมพิวเตอร์พกพา(Notebook) จำนวน : </td>
    <td>{{$school->nbNum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->nbWant == 1)
        {{"เพียงพอ"}}
      @elseif($school->nbWant == 2)
        {{"ไม่เพียงพอ"}}
      @endif
    </td>
  </tr>
  <tr>
    <td>2.3 เครื่องคอมพิวเตอร์แม่ข่าย(Server) จำนวน : </td>
    <td>{{$school->svNum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->svWant == 1)
        {{"เพียงพอ"}}
      @elseif($school->svWant == 2)
        {{"ไม่เพียงพอ"}}
      @endif
    </td>
  </tr>
  <tr>
    <td>2.4 โทรทัศน์(TV) จำนวน : </td>
    <td>{{$school->tvnum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->tvWant == 1)
        {{"เพียงพอ"}}
      @elseif($school->tvWant == 2)
        {{"ไม่เพียงพอ"}}
      @endif
    </td>
  </tr>
  <tr>
    <td>2.5 กล้อง จำนวน : </td>
    <td>{{$school->cameranum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->cameraWant == 1)
        {{"เพียงพอ"}}
      @elseif($school->cameraWant == 2)
        {{"ไม่เพียงพอ"}}
      @endif
    </td>
  </tr>
  <tr>
    <td>2.6 LCD Tablet จำนวน : </td>
    <td>{{$school->tabletnum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->tabletWant == 1)
        {{"เพียงพอ"}}
      @elseif($school->tabletWant == 2)
        {{"ไม่เพียงพอ"}}
      @endif
    </td>
  </tr>
  <tr>
    <td>2.7 Active Board จำนวน : </td>
    <td>{{$school->abnum}}  เครื่อง</td>
  </tr>
  <tr>
    <td>ความเพียงพอ :</td>
    <td>
      @if($school->abWant == 1)
        {{"เพียงพอ"}}
      @elseif($school->abWant == 2)
        {{"ไม่เพียงพอ"}}
      @endif
    </td>
  </tr>

  <tr>
    <td>3. ข้อมูลบุคลากรที่มีความรู้ด้านเทคนิค/ซ่อมแซม :</td>
    <td>
      @if($school->dlitTechnical == 1)
        ไม่มีบุคลากรที่มีความรู้ด้านเทคนิค/ซ่อมแซม
      @else
        มีบุคลากรที่มีความรู้ด้านเทคนิค/ซ่อมแซม
      @endif
    </td>
  </tr>
  @if($school->dlitTechnical == 2)
  <tr>
    <td>จำนวนบุคลากรที่มีความรู้ด้านเทคนิค/ซ่อมแซม :</td>
    <td>{{$school->dlitTechnicalNum}}</td>
  </tr>
  @endif

  <tr>
    <td>3. ครูผู้สอนที่มีทักษะความพร้อมในการจัดการสอนและการใช้สื่อ :</td>
    <td>
      @if($school->dlitTeacher == 1)
        ไม่มีครูผู้สอนที่มีทักษะความพร้อม
      @else
        มีครูผู้สอนที่มีทักษะความพร้อม
      @endif
    </td>
  </tr>
  @if($school->dlitTeacher == 2)
  <tr>
    <td>จำนวนครูผู้สอนที่มีทักษะความพร้อม :</td>
    <td>{{$school->dlitTeacherNum}}</td>
  </tr>
  @endif
  <tr>
    <td>4.  เครือข่ายอินเทอร์เน็ตที่มีอยู่ปัจจุบัน :</td>
    <td>
      {{$school->isp}}
      @if(!empty($school->ispDetail))
        {{$school->ispDetail}}
      @endif
    </td>
  </tr>

  <tr>
    <td>ประสิทธิภาพการใช้งาน :</td>
    <td>
      @if($school->internet == 1)
        ใช้การได้ดี
      @elseif($school->internet == 2)
        ใช้การได้บางครั้ง
      @elseif($school->internet == 2)
        ใช้การไม่ได้เลย
      @endif
    </td>
  </tr>

  <tr>
    <td colspan="2">ภาพกิจกรรม dlit</td>
  </tr>
  <tr>
    <td align="center">{!! Html::image($school->dlitPicture1) !!}</td>
    <td align="center">{!! Html::image($school->dlitPicture2) !!}</td>
  </tr>
  <tr>
    <td align="center">{{$school->dlitPictureDetail1}}</td>
    <td align="center">{{$school->dlitPictureDetail2}}</td>
  </tr>
  <tr>
    <td align="center">{!! Html::image($school->dlitPicture3) !!}</td>
    <td align="center">{!! Html::image($school->dlitPicture3) !!}</td>
  </tr>
  <tr>
    <td align="center">{{$school->dlitPictureDetail4}}</td>
    <td align="center">{{$school->dlitPictureDetail4}}</td>
  </tr>
  <tr>
    <td>ชื่อผู้บันทึกข้อมูล :</td>
    <td>{{$school->saveUser}}</td>
  </tr>
  <tr>
    <td>ชื่อผู้อำนวยการโรงเรียน :</td>
    <td>{{$school->directerUser}}</td>
  </tr>
  <tr>
    <td>หมายเลขโทรศัพท์ผู้อำนวยการโรงเรียน :</td>
    <td>{{$school->telDirecter}}</td>
  </tr>
</table>
<div align="center">
  {!! Html::link('../dlitForm/'.$school->id, 'แก้ไขข้อมูล', array('class'=>'btn btn-primary')) !!}
</div>
<br />
<br />
@stop
