@extends('admin.base')
@section('content')
		<!-- 引用控制层插件样式 -->
		<link rel="stylesheet" href="/statics/upload/control/css/zyUpload.css" type="text/css">
		
		<!-- 引用核心层插件 -->
		<script type="text/javascript" src="/statics/upload/core/zyFile.js"></script>
		<!-- 引用控制层插件 -->
		<script type="text/javascript" src="/statics/upload/control/js/zyUpload.js"></script>
		<!-- 引用初始化JS -->
		<script type="text/javascript" src="/statics/upload/demo.js"></script>
<div class="left-sidebar">
            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
                      上传图片
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
		@foreach($photos as $three)
                    <ul class="thumbnails">
		@foreach($three as $item)
                      <li class="span4">
                        <div class="thumbnail">
                          <img alt="300x200" style="width: 300px; height: 200px;" src="{{ $item->src }}">
                        </div>
                      </li>
		@endforeach
                    </ul>
		@endforeach
	    <div id="uploadd" class="demo" aid="{{ $aid }}"></div>   
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
