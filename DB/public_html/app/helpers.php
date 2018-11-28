<?php

if (! function_exists('backend_asset')) {
    /**
     * Backend Asset Url.
     *
     * @param null $path
     * @param null $secure
     *
     * @return string
     */
    function backend_asset($path = null, $secure = null)
    {
        return asset('assets/backend' . ($path ? '/' . $path : ''), $secure);
    }
}

if (! function_exists('frontend_asset')) {
    /**
     * Frontend Asset Url.
     *
     * @param null $path
     * @param null $secure
     *
     * @return string
     */
    function frontend_asset($path = null, $secure = null)
    {
        return asset('assets/frontend' . ($path ? '/' . $path : ''), $secure);
    }
}

if (! function_exists('current_query_url')) {
    /**
     * @param $attributes array|string
     * @param bool $withCurrentQueries
     *
     * @return string
     */
    function current_query_url($attributes, $withCurrentQueries = true, $except = [])
    {
        return query_url(request()->url(), $attributes, $withCurrentQueries, $except);
    }
}

if (! function_exists('query_url')) {
    /**
     * @param $url
     * @param $attributes array|string
     * @param bool $withCurrentQueries
     *
     * @return string
     */
    function query_url($url, $attributes, $withCurrentQueries = false, $except = [])
    {
        if ($withCurrentQueries) {
            $attributes = array_merge(request()->query(), is_array($attributes) ? $attributes : [$attributes]);
        }
        if ($except) {
            $attributes = array_except($attributes, $except);
        }

        return $url . '?' . http_build_query($attributes);
    }
}

if (! function_exists('get_months')) {
    function get_months()
    {
        for($i = 1; $i < 13; $i++){
            $months[$i] = "months ".$i;
        }
        return $months;
    }
}



if(! function_exists('option')) {
    /**
     * Get Option
     * @param $name
     * @param null $default
     * @return mixed|\App\Support\Option\Option
     */
    function option($name = null, $default = null)
    {
        return $name === null ? app('option') : app('option')->getOption($name, $default);
    }
}

if(! function_exists('get_option')) {
    /**
     * Get Option
     * @param $name
     * @param null $default
     * @return mixed
     */
    function get_option($name, $default = null)
    {
        return option($name, $default);
    }
}

if(! function_exists('add_option')) {
    /**
     * Add Option
     *
     * @param $name
     * @param null $default
     * @param bool $autoload
     * @return mixed
     */
    function add_option($name, $default = null, $autoload = false)
    {
        return app('option')->createOption($name, $default, $autoload);
    }
}

if(! function_exists('update_option')) {
    /**
     * Update Option
     *
     * @param $name
     * @param null $default
     * @param bool $autoload
     * @return mixed
     */
    function update_option($name, $default = null, $autoload = false)
    {
        return app('option')->updateOption($name, $default, $autoload);
    }
}

if(! function_exists('get_array_option')) {
    /**
     * Get Option
     * @param $name
     * @param null $default
     * @return mixed
     */
    function get_array_option($name, $default = null)
    {
        return unserialize(option($name, $default));
    }
}

if(! function_exists('add_array_option')) {
    /**
     * Add Option
     *
     * @param $name
     * @param null $default
     * @param bool $autoload
     * @return mixed
     */
    function add_array_option($name, $default = null, $autoload = false)
    {
        return add_option($name, serialize($default), $autoload);
    }
}

if(! function_exists('update_array_option')) {
    /**
     * Update Option
     *
     * @param $name
     * @param null $default
     * @param bool $autoload
     * @return mixed
     */
    function update_array_option($name, $default = null, $autoload = false)
    {
        return update_option($name, serialize($default), $autoload);
    }
}

if(! function_exists('delete_option')) {
    /**
     * delete Option
     * @param $name
     * @param null $default
     * @return mixed
     */
    function delete_option($name)
    {
        return app('option')->deleteOption($name);
    }
}

if(! function_exists('getClientIp')){
    function getClientIp(){

        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}

if(! function_exists('fly_menu')) {
    function fly_menu($slug)
    {
        $menu = \App\Menu::where('slug', $slug)
            ->first();
        return $menu->items->filter(function ($item) {
            return $item->parent_id == 0;
        })->sortBy('position');
    }
}

if(! function_exists('get_route')) {
    function get_route($rou){
        $route_ok = "";
        $arr = explode("->",$rou);
        $arr_sub = array();
        for($i=0;$i<count($arr);$i++){
            $arr_sub[] = $arr[$i];
        }
        for($j=0;$j<count($arr_sub);$j++){
            $link = route('location.show',str_replace(" ","-",$arr_sub[$j]));
            $route_ok .= '<a href="'.$link.'" target="_blank" title="'.$arr_sub[$j].", ".$arr_sub[$j]." Myanmar".", ".$arr_sub[$j]." Travel Guide".'">'.$arr_sub[$j].'</a>';

            if($j < count($arr_sub)-1){
                $route_ok .= ' → ';
            }
        }
        return $route_ok;
    }
}

if(! function_exists('get_route_no_arrow')) {
    function get_route_no_arrow($rou){
        $route_ok = "";
        $arr = explode("->",$rou);
        $arr_sub = array();
        for($i=0;$i<count($arr);$i++){
            $arr_sub[] = $arr[$i];
        }
        for($j=0;$j<count($arr_sub);$j++){
            $link = route('location.show',str_replace(" ","-",$arr_sub[$j]));
            $route_ok .= '<a href="'.$link.'" target="_blank" title="'.$arr_sub[$j].", ".$arr_sub[$j]." Myanmar".", ".$arr_sub[$j]." Travel Guide".'">'.$arr_sub[$j].'</a> ';
        }
        return $route_ok;
    }
}

if(! function_exists('get_styletour')) {
    function get_styletour($style){
        $arr_style = explode(",",$style);
        $arr = array(1=>'swimming',2=>'cruising',3=>'boating',4=>'ethnic',5=>'cultural',6=>'heritage',7=>'nature',
            8=>'cuisine',9=>'kayaking',10=>'adventure',11=>'beach',12=>'wellness',13=>'wildlife',14=>'history');
        $result = "";
        for($i=0;$i<count($arr_style);$i++){
            if(in_array(($i+1),$arr_style)){
                $result .= ' <a href="javascript:;" title="'.ucfirst($arr[$i+1]).'" class="tooltip"><span class="'.$arr[$i+1].'"></span></a>';
            }else{
                $result .= '';
            }
        }
        return $result;
    }
}

if(! function_exists('get_price')) {
    function get_price($price = 0,$discount = 0)
    {
        $price_ajax = 0;
        if($price > 0){
            $price_real = intval($price) + intval($discount);
            if($discount > 0){
                $price_ajax = "<strong>$".number_format($price_real)."</strong> <font>$".number_format($price)."</font>";
            }else{
                $price_ajax = "<font>$".number_format($price)."</font>";
            }
        }
        return $price_ajax;
    }
}

if(! function_exists('get_price_hotel')) {
    function get_price_hotel($price = 0,$discount = 0)
    {
        if($price > 0){
            $price_real = intval($price) + intval($discount);
            if($discount > 0){
                $price_ajax = "<small>$".number_format($price_real)."</small> <span>$".number_format($price)."</span>";
            }else{
                $price_ajax = "<span>$".number_format($price)."</span>";
            }
        }
        return $price_ajax;
    }
}

if(! function_exists('get_price_home')) {
    function get_price_home($price = 0,$discount = 0)
    {
        if($price > 0){
            $price_real = intval($price) + intval($discount);
            if($discount > 0){
                $price_ajax = "<b>$".number_format($price)."</b>";
            }else{
                $price_ajax = "<b>$".number_format($price)."</b>";
            }
        }
        return $price_ajax;
    }
}

if(! function_exists('get_special')) {
    function get_special($id, $link, $special)
    {
        $t_id = "'" . $id . "'";
        $t_link = "'" . $link . "'";
        $special_ok = "";
        $arr_spe = explode("#", $special);
        $arr_detail = explode("<font>", @$arr_spe[1]);
        for ($i = 0; $i < count($arr_detail); $i++) {
            if (strlen($arr_detail[$i]) > 3) {
                //<a href="#"> Special Offers <span>»</span></a>
                $arr_name = explode("</font>", $arr_detail[$i]);
                $special_ok .= '<a href="javascript:;" class="offer" id="special_' . $id . '" onclick="special(' . $t_id . ',' . $t_link . ')" title="' . $arr_name[0] . '">Special Offers <span>»</span></a>';
                $special_ok .= '<div id="show_special_' . $id . '" class="speaaaa"  style="width: 320px;display: none;position: absolute;z-index: 9999;background: #fff;padding-bottom: 10px;border: 3px solid #64bc46;margin-top:5px;"></div>';
            }
        }
        return $special_ok;
    }
}

if(! function_exists('get_train')) {
    function get_train($exper)
    {
        $result = "";
        if ($exper == 1) {
            $result = '<span class="fa fa-plane icon_meals"></span>';
        } elseif ($exper == 2) {
            $result = '<span class="fa fa-car"></span>';
        } elseif ($exper == 3) {
            $result = '<span class="fa fa-train"></span>';
        } elseif ($exper == 4) {
            $result = '<span class="fa fa-ship"></span>';
        } elseif ($exper == 5) {
            $result = '<span class="fa fa-pied-piper"></span>';
        } elseif ($exper == 9) {
            $result = '<span class="fa fa-blind"></span>';
        } elseif ($exper == 7) {
            $result = '<span class="fa fa-bicycle"></span>';
        } elseif ($exper == 8) {
            $result = '<span class="fa fa-motorcycle"></span>';
        } elseif ($exper == 6) {
            $result = '<span class="fa fa-male"></span>';
        } elseif ($exper == 10) { //Elephant
            $result = '<span class="fa fa-paw"></span>';
        } elseif ($exper == 11) {
            $result = '<span class="fa fa-life-ring"></span>';
        } elseif ($exper == 12) { // Horse-cart
            $result = '<span class="fa fa-paw"></span>';
        } elseif ($exper == 13) { // Horse-cart
            $result = '<span class="fa fa-paw"></span>';
        } elseif ($exper == 14) {
            $result = '<span class="fa fa-dot-circle-o"></span>';
        }
        return $result;

    }
}
if(! function_exists('get_name_train')) {
    function get_name_train($exper)
    {
        if ($exper == 1) {
            $result = 'Plane';
        } elseif ($exper == 2) {
            $result = 'Car';
        } elseif ($exper == 3) {
            $result = 'Train';
        } elseif ($exper == 4) {
            $result = 'Cruise';
        } elseif ($exper == 5) {
            $result = 'Boating';
        } elseif ($exper == 6) {
            $result = 'Walking';
        } elseif ($exper == 7) {
            $result = 'Bikking';
        } elseif ($exper == 8) {
            $result = 'Motorbike';
        } elseif ($exper == 9) {
            $result = 'Trekking';
        } elseif ($exper == 10) {
            $result = 'Elephant';
        } elseif ($exper == 11) {
            $result = 'Balloon';
        } elseif ($exper == 12) {
            $result = 'Horse-cart';
        } elseif ($exper == 13) {
            $result = 'Horse';
        } elseif ($exper == 14) {
            $result = 'Trishaw';
        }

        return $result;
    }
}

if(! function_exists('get_list_posts')) {
    function get_list_posts(
        $limit = 10,
        $category_id = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $repository = app()->make(\App\Support\Repositories\PostRepository::class);
        return $repository->getPosts($limit, $category_id, $onlyShowPublished, $orderBy);
    }
}

if(! function_exists('get_list_tours')) {
    function get_list_tours(
        $limit = 10,
        $category_id = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $repository = app()->make(\App\Support\Repositories\TourRepository::class);
        return $repository->getTours($limit, $category_id, $onlyShowPublished, $orderBy);
    }
}


if(! function_exists('get_list_cruises')) {
    function get_list_cruises(
        $limit = 10,
        $category_id = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $repository = app()->make(\App\Support\Repositories\CruisesRepository::class);
        return $repository->getListCruises($limit, $category_id, $onlyShowPublished, $orderBy);
    }
}

if ( !function_exists('mysql_escape'))
{
    function mysql_escape($inp)
    {
        return str_replace("-"," ",$inp);
    }
}
if(! function_exists('get_tours_by_destinations')) {
    function get_tours_by_destinations($keyword,$limit){
        $repository = app()->make(\App\Support\Repositories\LocationRepository::class);
        return $repository->searchDestinations($keyword, $limit);
    }
}
if(! function_exists('get_all_dest_mu')) {
    function get_all_dest_mu($country, $perPage){
        $repository = app()->make(\App\Support\Repositories\LocationRepository::class);
        return $repository->getAllDes($country, $perPage);
    }
}
if(! function_exists('get_hotels')) {
    function get_hotels($limit, $country){
        $repository = app()->make(\App\Support\Repositories\HotelRepository::class);
        return $repository->getHotels($limit, $country);
    }
}

if(! function_exists('get_list_hotels')) {
    function get_list_hotels(
        $category_id = 0,
        $limit = 10,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $repository = app()->make(\App\Support\Repositories\HotelRepository::class);
        return $repository->getListHotels($category_id, $limit, $onlyShowPublished, $orderBy);
    }
}

if(! function_exists('get_star')){
    function get_star($star)
    {
        $text = "";
        if($star==5){
            $text = '<span class="star5"></span>';
        }elseif($star==4.5){
            $text = '<span class="star45"></span>';
        }elseif($star==4){
            $text = '<span class="star4"></span>';
        }elseif($star==3.5){
            $text = '<span class="star35"></span>';
        }else{
            $text = '<span class="star3"></span>';
        }
        return $text;
    }
}

if(! function_exists('get_type_hotel')){
    function get_type_hotel($type)
    {
        $text = "";
        if($type==1){
            $text = 'City Hotel';
        }elseif($type==2){
            $text = 'Boutique Hotel';
        }elseif($type==3){
            $text = 'Beach Resort';
        }elseif($type==4){
            $text = 'Resort';
        }else{
            $text = 'Cruise';
        }
        return $text;
    }
    
}


