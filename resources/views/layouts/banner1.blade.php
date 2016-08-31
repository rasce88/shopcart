@section('banner')

<!-- BEGIN BANNER -->
  <section id="slider"><!--slider-->
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div id="slider-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
              <li data-target="#slider-carousel" data-slide-to="1"></li>
              <li data-target="#slider-carousel" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner">
              @foreach( $banners as $banner)
                <div class="item {{ $banner->active }}">
                  <div class="col-sm-6">
                    <h1><span>{{ $banner->text_red }}</span>{{ $banner->text_gray }}</h1>
                    <h2>{{ $banner->title }}</h2>
                    <p>{{ $banner->description }}</p>
                    <button type="button" class="btn btn-default get">{{ $banner->button }}</button>
                  </div>
                  <div class="col-sm-6">
                    <img src="media/{{ $banner->imagepath }}" class="girl img-responsive" alt="" />
                    @if (!$banner->imagepath_price == '')
                      <img src="media/{{ $banner->imagepath_price }}"  class="pricing" alt="" />
                    @endif  
                  </div>
                </div>
              @endforeach
            </div>
            
            
            <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
              <i class="fa fa-angle-left"></i>
            </a>
            <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
          </div>
          
        </div>
      </div>
    </div>
  </section><!--/slider-->
<!-- END BANNER -->
@endsection