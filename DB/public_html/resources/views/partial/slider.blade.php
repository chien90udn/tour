<div id="myCarousel" class="carousel slide" data-ride="carousel">
    @php $listSlider = get_option('home-slider'); @endphp
    <!-- Indicators -->
    <ol class="carousel-indicators">
      @foreach($listSlider as $key => $slider)
      <li data-target="#myCarousel" data-slide-to="{{  $key }}" class="{{ $loop->first ? 'active' : '' }}"></li>
      @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        @foreach($listSlider as $slider)
        <div class="item {{ $loop->first ? 'active' : '' }}">
            <img src="{{ @$slider['url'] }}" alt="" border="0" style="width:100%;">
        </div>
        @endforeach
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-chevron-left arrowleft" aria-hidden="true"></i>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <i class="fa fa-chevron-right arrowright" aria-hidden="true"></i>
      <span class="sr-only">Next</span>
    </a>
</div>