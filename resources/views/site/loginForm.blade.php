@extends('layouts.master')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <h2>เข้าสู่ระบบ</h2>

      {!! Form::open(array('url' => 'login', 'class' => 'form-horizontal')) !!}
        @if($errors->has())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              {{ $error }}<br />
            @endforeach
          </div>
        @endif

        <div class="form-group">
          {!! Form::label('username', 'ชื่อผู้ใช้', array('class' => 'control-label')) !!}
          {!! Form::text('username','',array('class' => 'form-control')) !!}
        </div>
        <div class="form-group">
          {!! Form::label('password', 'รหัสผ่าน', array('class' => 'control-label')) !!}
          {!! Form::password('password',array('class' => 'form-control')) !!}
        </div>
        <div class="control-actions">
          {!! Form::submit('ตกลง', array('class' => 'btn btn-lg btn-primary btn-block')) !!}
        </div>
      </div>
    </div>
  </div>
{!! Form::close() !!}
<br /><br />
@stop
