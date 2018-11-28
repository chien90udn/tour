@foreach($tours as $tour)
<div id="best-tour2">
    <div id="img-tour">
        <div id="img-tour">
            <a href="{{ route('tours.show',$tour->name_link) }}" title="{{ $tour->name }}">
                <img src="{{ $tour->photo }}" class="lazyload" alt="{{ $tour->name }}" original="{{ $tour->photo }}">
            </a>

            <!-- add new image -->
            <!-- end new image -->

            <div id="viewmap">
                <a rel="nofollow" href="{{ route('tours.show',$tour->name_link) }}" title="View Route Map"><i class="fa fa-map-marker"></i> View Route Map</a><!--class="view_map_detail"-->
                <a class="photo-see" href="{{ route('tours.show',$tour->name_link) }}" title="See all photos">See all photos </a>
            </div>
            <a class="heart-tour tooltip tooltipstered" rel="nofollow" id="love_tour1" onclick="love_tour(1)" href="javascript:;"><i class="fa fa-heart-o"></i></a>					</div>
    </div>
    <div id="right-tour">
        <div id="top-t">
            <div id="left-nametour">
                <div id="day"><font>{{ $tour->duration }}</font>  days </div>
                <div id="title-info">
                    <h2>
                        <a href="{{ route('tours.show',$tour->name_link) }}" title="{{ $tour->name }}">{{ $tour->name }}</a>
                    </h2>
                    <div id="des-tour">
                        <i class="fa fa-map-marker"></i>
                        {!! get_route($tour->route) !!}
                    </div>
                </div>
                <div id="title-footer">
                    <span class="number-label">{{ $loop->iteration }}</span>
                </div>
            </div>
        </div>
        <div id="txt-highlights">
            <ul>
                <?php

                $newcontent = preg_replace("/<p[^>]*?>/", "", $tour->highlight);
                $newcontent = str_replace("</p>", "<br />", $newcontent);

                $high = explode('<br />',$newcontent);

                for($i=0;$i<count($high);$i++){

                if(strlen($high[$i]) > 5){

                ?>

                <li><font>•</font> <?=$high[$i]?></li>

                <?php }}?>
            </ul>
        </div>
        <div id="bot-tour">
            <font class="experiences">Experiences :</font>

            <div id="right-styletour">

                <?=get_styletour($tour->experience)?>

            </div>

            <?php if($tour->price>0){ ?>

            <div id="price-tour">Only From <?=get_price($tour->price,$tour->discount)?></div>

            <?php }?>

        </div>
    </div>
</div>
@endforeach
<div id="show{{ $page+1 }}">
    <div id="view-all-tour">
        
        <div id="show-tour">
            <a href="javascript:void(0);" onclick="show_more_tours('{{ $category->name_link }}',{{ $page }})" class="bt-moretour">...View More...</a>
        </div>

    </div>
</div>