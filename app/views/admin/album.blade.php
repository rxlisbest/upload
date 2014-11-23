@extends('admin.base')
@section('content')
<div class="left-sidebar">
            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      新建相册
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
              {{ Form::open(array('url'=>'album/create', 'method'=>'post', 'class'=>'form-horizontal no-margin')) }}
                      <div class="control-group">
                        <label class="control-label" for="email1">
                          相册标题
                        </label>
                        <div class="controls">
                          <input type="text" id="title" name="title" class="span6" placeholder="Title">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="email1">
                          相册描述
                        </label>
                        <div class="controls">
                          <textarea rows="3" id="description" name="description" class="span8" placeholder="Description">
                          </textarea>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label" for="email1">
                        </label>
                        <div class="controls">
                          <button type="创建" class="btn btn-info pull-right">
                            Submit
                          </button>
                        </div>
                      </div>
              {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>
</div>

<!-- ¿¿¿¿ -->
<!-- Right sidebar starts here -->
<!-- <div class="right-sidebar">
  <div class="wrapper">
    <a href="/customer/add">
      <button class="btn btn-large btn-info btn-block" type="button">¿¿¿¿¿¿</button>
    </a>
  </div>
</div> -->
<!-- Right sidebar ends here -->
@stop
