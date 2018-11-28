<div id="search-bestcruise" style="border-top:none;" class="tours_search_box">
    <div class="container">
        <form name="form_search_t" id="form_search_tour" action="/tours/search" method="GET">
            <div id="container-search">
                <div id="left-txt">
                    <h2>Find The Best Tours</h2>
                </div>
                <div class="container-search-home">
                    <div id="component-search" style="margin-top:10px;">
                        <div id="box2-input" >
                            @php $groups = \App\Group::all()->mapWithKeys(function($query){
                                        return [
                                            $query->id => $query->name,
                                        ];
                                    });
                            @endphp
                            {{  Form::select('cate', $groups, request()->get('cate'), ['class' => 'duration-cruise country_id']) }}
                        </div>
                        <div id="box2-input">
                            <div class="input-day">
                                <select name="tourday" id="tourday" class="des-date country_id">
                                    <option value="0">Select Duration</option>
                                    <?php
                                    for ($i=1; $i < 23; $i++) {
                                        $day = "Days";
                                        if($i==1){$day = "Day";}
                                        echo "<option value='".$i."' >".$i." ".$day." </option>";
                                    }
                                    ?>
                                </select>

                            </div>
                        </div>
                        <div id="box2-input">
                            <input id="tags_des" name="tag" type="text" class="des-date" placeholder="Ex: Hanoi,Siem Reap..." />
                        </div>
                        <div id="box2-input">
                            <input type="text" class="duration-cruise" name="q" id="text_search" value="" placeholder="Enter keyword" />
                        </div>
                        <a href="javascript:;" onclick="document.getElementById('form_search_tour').submit();" class="bt-search" title="Search Tours">Search Now<i class="fa fa-chevron-right fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

