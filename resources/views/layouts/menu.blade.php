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
      <li><a href="../dlit"><span class="glyphicon glyphicon-cloud"></span> DLIT</a></li>
      <li><a href="../electricity"><span class="glyphicon glyphicon-warning-sign"></span> ข้อมูลไฟฟ้า</a></li>
      <li><a href="../manual"><span class="glyphicon glyphicon-book"></span> คู่มือ</a></li>
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
      <li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-facetime-video"> DLTV</span></a>
            <ul class="dropdown-menu">
              <li>{!! Html::link('primarydltv',' ข้อมูล DLTV ระดับเขตพื้นที่') !!}</li>
              <li>{!! Html::link('schooldltv', ' ข้อมูล DLTV ระดับโรงเรียน') !!}</li>
            </ul>
        </li>
      </li>
      <li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cloud"> DLIT</span></a>
            <ul class="dropdown-menu">
              <li>{!! Html::link('primarydlit',' ข้อมูล DLIT ระดับเขตพื้นที่') !!}</li>
              <li>{!! Html::link('schooldlit', ' ข้อมูล DLIT ระดับโรงเรียน') !!}</li>
            </ul>
        </li>
      </li>
      <li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-warning-sign"> ข้อมูลไฟฟ้า</span></a>
            <ul class="dropdown-menu">
              <li>{!! Html::link('primaryelectricity',' ข้อมูลไฟฟ้าระดับเขตพื้นที่') !!}</li>
              <li>{!! Html::link('schoolelectricity', ' ข้อมูลไฟฟ้าระดับโรงเรียน') !!}</li>
            </ul>
        </li>
      </li>
      <li><a href="../manual"><span class="glyphicon glyphicon-book"></span> คู่มือ</a></li>
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
      <li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-facetime-video"> DLTV</span></a>
            <ul class="dropdown-menu">
              <li>{!! Html::link('clusterdltv',' ข้อมูล DLTV ระดับ Cluster') !!}</li>
              <li>{!! Html::link('clusterprimarydltv',' ข้อมูล DLTV ระดับเขตพื้นที่') !!}</li>
              <li>{!! Html::link('dltvsearch', ' ข้อมูล DLTV ระดับโรงเรียน') !!}</li>
            </ul>
        </li>
      </li>
      <li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-cloud"> DLIT</span></a>
            <ul class="dropdown-menu">
              <li>{!! Html::link('clusterdlit',' ข้อมูล DLIT ระดับ Cluster') !!}</li>
              <li>{!! Html::link('clusterprimarydlit',' ข้อมูล DLIT ระดับเขตพื้นที่') !!}</li>
              <li>{!! Html::link('dlitsearch', ' ข้อมูล DLIT ระดับโรงเรียน') !!}</li>
            </ul>
        </li>
      </li>
      <li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-warning-sign"> ข้อมูลไฟฟ้า</span></a>
            <ul class="dropdown-menu">
              <li>{!! Html::link('clusterelectricity',' ข้อมูลไฟฟ้าระดับ Cluster') !!}</li>
              <li>{!! Html::link('clusterprimaryelectricity',' ข้อมูลไฟฟ้าระดับเขตพื้นที่') !!}</li>
              <li>{!! Html::link('electricitysearch', ' ข้อมูลไฟฟ้าระดับโรงเรียน') !!}</li>
            </ul>
        </li>
      </li>
      <li><a href="../manual"><span class="glyphicon glyphicon-book"></span> คู่มือ</a></li>
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
