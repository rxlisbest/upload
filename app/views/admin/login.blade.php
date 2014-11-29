@extends('admin.base')
@section('content')
<div class="left-sidebar">
  
  <div class="row-fluid">
    
    <div class="span12">
      <div class="widget">
        <div class="widget-header">
          <div class="title">
              Login
          </div>
          <span class="tools">
            <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
          </span>
        </div>
        <div class="widget-body">
          <div class="span3"></div>
          <div class="span6">
            <div class="sign-in-container">
              {{ Form::open(array('url'=>'admin/login', 'method'=>'post', 'class'=>'login-wrapper')) }}
                <div class="header">
                  <div class="row-fluid">
                    <div class="span12">
                      <h3>
                        <font color="#3693cf">
                          Login
                        </font>
                        <img src="/statics/admin/img/logo1.png" alt="Logo" class="pull-right"></h3>
                      <p>{{ Session::get("message") ?: '<font color="red">Welcome!</font>'}}</p>
                    </div>
                  </div>
                 
                </div>
                <div class="content">
                  <div class="row-fluid">
                    <div class="span12">
                      {{ Form::text("username", "",array("class"=>"input span12", "id"=>"username", "placeholder"=>"Name", "required"=>"required", "type"=>"text")) }}
                    </div>
                  </div>
                  <div class="row-fluid">
                    <div class="span12">
                      {{ Form::password("password", array("class"=>"input span12 password", "id"=>"password", "placeholder"=>"Password", "required"=>"required", "type"=>"password")) }}
                    </div>
                  </div>
                </div>
                <div class="actions">
                  <input class="btn btn-primary" name="Login" type="submit" value="Login" >
                  <!-- <a class="link" href="#">Forgot Password?</a> -->
                  <div class="clearfix"></div>
                </div>
              {{ Form::close() }}
            </div>
          </div>
          <div class="span3"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    
  </div>
  

</div>

<!-- ���� -->
<!-- Right sidebar starts here -->
<!-- <div class="right-sidebar">
  <div class="wrapper">
    <a href="/customer/add">
      <button class="btn btn-large btn-info btn-block" type="button">������</button>
    </a>
  </div>
</div> -->
<!-- Right sidebar ends here -->
@stop
