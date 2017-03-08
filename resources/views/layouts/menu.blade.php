<?php $user = Session::get('user');?>
@if(@$user[0]->permission == 0)
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">หน้าแรก</a>
    </div>
    @if(!empty($user[0]->id))
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"> ข้อมูลพื้นฐาน</span></a>
          <ul class="dropdown-menu">
            <li>{!! Html::link('general', 'ข้อมูลที่ตั้ง') !!}</li>
            <li>{!! Html::link('teacher', 'ข้อมูลครู') !!}</li>
            <li>{!! Html::link('student', 'ข้อมูลนักเรียน') !!}</li>
          </ul>
      </li>
      <li><a href="../dltv"><span class="glyphicon glyphicon-facetime-video"></span> DLTV</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> DLIT</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-warning-sign"></span> ข้อมูลไฟฟ้า</a></li>
    </ul>
    @endif
    @if(!empty($user[0]->schoolName))
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user "></span>
            {{$user[0]->schoolName}}
      </a></li>
      <li><a href="../logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      @endif
    </ul>
  </div>
</nav>
@endif

@if(@$user[0]->permission == 1)
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">หน้าแรก</a>
    </div>
    @if(!empty($user[0]->id))
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"> ข้อมูลพื้นฐาน</span></a>
          <ul class="dropdown-menu">
            <li>{!! Html::link('general', 'ข้อมูลที่ตั้งของเขตพื้นที่') !!}</li>
            <li>{!! Html::link('primarygeneral', 'ข้อมูลที่ตั้งระดับโรงเรียน') !!}</li>
            <li role="separator" class="divider"></li>
            <li>{!! Html::link('primaryteacher', 'ข้อมูลครูระดับเขตพื้นที่') !!}</li>
            <li>{!! Html::link('schoolteacher', 'ข้อมูลครูระดับโรงเรียน') !!}</li>
            <li role="separator" class="divider"></li>
            <li>{!! Html::link('primarystudent', 'ข้อมูลนักเรียนระดับเขตพื้นที่') !!}</li>
            <li>{!! Html::link('schoolstudent', 'ข้อมูลนักเรียนระดับโรงเรียน') !!}</li>
          </ul>
      </li>
      <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> DLTV</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> DLIT</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-warning-sign"></span> ข้อมูลไฟฟ้า</a></li>
    </ul>
    @endif
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user "></span>
          @if(!empty($user[0]->schoolName))
            {{$user[0]->id}}
          @endif
      </a></li>
      <li><a href="../logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
@endif

@if(@$user[0]->permission == 2)
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">หน้าแรก</a>
    </div>
    @if(!empty($user[0]->id))
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cog"> ข้อมูลพื้นฐาน</span></a>
          <ul class="dropdown-menu">
            <li>{!! Html::link('general', 'ข้อมูลที่ตั้งของเขตตรวจราชการ') !!}</li>
            <li>{!! Html::link('primarygeneral', 'ข้อมูลที่ตั้งของเขตพื้นที่') !!}</li>
            <li>{!! Html::link('schoolgeneral', 'ข้อมูลที่ตั้งของโรงเรียน') !!}</li>
            <li role="separator" class="divider"></li>
            <li>{!! Html::link('clusterteacher', 'ข้อมูลครูระดับเขตตรวจราชการ') !!}</li>
            <li>{!! Html::link('clusterprimaryteacher', 'ข้อมูลครูระดับเขตพื้นที่') !!}</li>
            <li>{!! Html::link('teachersearch', 'ข้อมูลครูระดับโรงเรียน') !!}</li>
            <li role="separator" class="divider"></li>
            <li>{!! Html::link('clusterstudent', 'ข้อมูลนักเรียนระดับเขตตรวจราชการ') !!}</li>
            <li>{!! Html::link('clusterprimarystudent', 'ข้อมูลนักเรียนระดับเขตพื้นที่') !!}</li>
            <li>{!! Html::link('studentsearch', 'ข้อมูลนักเรียนระดับโรงเรียน') !!}</li>
          </ul>
      </li>
      <li><a href="#"><span class="glyphicon glyphicon-facetime-video"></span> DLTV</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-cloud"></span> DLIT</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-warning-sign"></span> ข้อมูลไฟฟ้า</a></li>
    </ul>
    @endif
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user "></span>
          @if(!empty($user[0]->schoolName))
            {{$user[0]->schoolName}}
          @endif
      </a></li>
      <li><a href="../logout"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
@endif
