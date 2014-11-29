@extends('admin.base')
@section('content')
          <div class="left-sidebar">
            <div class="row-fluid">
              <div class="span12">
                <div class="widget">
                  <div class="widget-header">
                    <div class="title">
			相册列表	
                    </div>
                    <span class="tools">
                      <a class="fs1" aria-hidden="true" data-icon="&#xe090;"></a>
                    </span>
                  </div>
                  <div class="widget-body">
		@foreach($list as $three)
                    <ul class="thumbnails">
		@foreach($three as $item)
                      <li class="span4">
                        <div class="thumbnail">
                          <img alt="300x200" style="width: 300px; height: 200px;" src="/statics/admin/img/saturation.png">
                          <div class="caption">
                            <h3>
                              {{ $item->title }}
                            </h3>
                            <p>
				{{ $item->description }}
                            </p>
                            <p>
                              <a href="/admin/album/upload/{{ $item->aid }}" class="btn btn-info">
                                进入相册
                              </a>
                              <a href="/album/{{ $item->aid }}" class="btn btn-danger" target="_blank">
                                预览 
			      </a>
                            </p>
                          </div>
                        </div>
                      </li>
		@endforeach
                    </ul>
		@endforeach
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Right sidebar starts here -->
<div class="right-sidebar">
  <div class="wrapper">
    <a href="/admin/album/create">
      <button class="btn btn-large btn-info btn-block" type="button">新建相册</button>
    </a>
  </div>
</div>
<!-- Right sidebar ends here -->
@stop
