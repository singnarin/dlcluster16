<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
  {!! Html::script('js/jquery.min.js') !!}
  {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
  <style type="text/css">
  	@import url("../webfonts/thsarabunnew_bold/stylesheet.css");
  	@import url("../webfonts/thaisansneue/stylesheet.css");
  	body,td,th {
  		font-family: 'thsarabunnew bold';
  	}
  	body{
  	background: url('../images/internet_bg06.jpg') no-repeat center center fixed;
  	  -webkit-background-size: cover;
  	  -moz-background-size: cover;
  	  -o-background-size: cover;
  	  background-size: cover;
  	}
  	h1,h2,h3,h4,h5,h6 {
  		font-family: 'thsarabunnew bold';
  	}
  	.font_thaisan{
          font-family: 'thaisans_neueultra_bold';
      }
  	.panel-heading {
      padding: 5px 15px;
  	}

  	.panel-footer {
  		padding: 1px 15px;
  		color: #A0A0A0;
  	}

  	.profile-img {
  		width: 96px;
  		height: 96px;
  		margin: 0 auto 10px;
  		display: block;
  		-moz-border-radius: 50%;
  		-webkit-border-radius: 50%;
  		border-radius: 50%;
  	}
  	a:link {
  	text-decoration: none;
  	}
  	a:visited {
  		text-decoration: none;
  	}
  	a:hover {
  		text-decoration: none;
  	}
  	a:active {
  		text-decoration: none;
  	}
  	.ha1{
  		font-family: 'thaisans_neueultra_bold';
  		font-size:40px;
  		color: #FFFFFF;
  	}
  	.ha2{
  		font-family: 'thaisans_neueultra_bold';
  		font-size: 32px;
  		color: #FFFFFF;
  	}
  	.foot{
  		font-family: 'thsarabunnew bold';
  		font-size:16px;
  	}
  	.mastfoot {
  	  color: #fff; /* IE8 proofing */
  	}
  	.bg
  	{
   		background-color: #FFFFFF;
  	}
  </style>
</head>
  <body>
    <div class="container"
  	<br>
      <table align="center" width="100%">
  			<tr>
  				<td width="10%" align="right" valign="top">
  					<a href="index.php"><img src="../images/logo.png" width="80" border="0" alt="หน้าแรก"></a>
  				</td>
  				<td width="3%"></td>
  				<td width="87%">
  					<span class="ha1">ระบบรายงานสภาพการดำเนินงาน การศึกษาทางไกล</span>
  					<p class="ha2">เขตตรวจราชการ 16 จังหวัดเชียงราย พะเยา แพร่ น่าน</p>
  				</td>
  			</tr>
  		</table>

      <div class="row">
      <div class="span3">
         @include('layouts.menu')
      </div>
      <div class="span9 content">
        <div class="bg"><br>
          @yield('content')
        </div>
      </div>
    </div>
</div>

  	<div class="mastfoot">
  		    <div class="inner" align="center">
  		      <p class="foot">©:เขตตรวจราชการ 16 จังหวัดเชียงราย พะเยา แพร่ น่าน</p>
  		    </div>
    </div>

</body>
</html>
