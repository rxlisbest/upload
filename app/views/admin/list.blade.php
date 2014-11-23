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
                          <img alt="300x200" style="width: 300px; height: 200px;" src="img/saturation.png">
                          <div class="caption">
                            <h3>
                              {{ $item->title }}
                            </h3>
                            <p>
				{{ $item->description }}
                            </p>
                            <p>
                              <a href="#" class="btn btn-info">
                                Action
                              </a>
                              
                              <a href="#" class="btn">
                                Action
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
<!-- <div class="right-sidebar">
  <div class="wrapper">
    <a href="/customer/add">
      <button class="btn btn-large btn-info btn-block" type="button">¿¿¿¿¿¿</button>
    </a>
  </div>
</div> -->
<!-- Right sidebar ends here -->
@stop
