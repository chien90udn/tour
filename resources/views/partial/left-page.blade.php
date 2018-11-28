<div id="r-dt-travelguide">
    <div id="box-links">
        <div class="panel panel-default bpt-panel">
            <div class="panel-heading">
                <h3 class="highlight padding-top-0 padding-bottom-0 margin-bottom-0"><b>About Discover Indochina</b></h3>
            </div>
            <div class="list-group">
                @foreach(fly_menu('about-menu')->sortBy('position') as $item)
                    <a class="list-group-item active" rel="nofollow" href="{{ $item->url }}" title="{{ $item->name }}"><span class="icon icon-arrow-right-blue"></span>{{ $item->name }}</a>
                @endforeach
            </div>
        </div>
    </div>
</div>