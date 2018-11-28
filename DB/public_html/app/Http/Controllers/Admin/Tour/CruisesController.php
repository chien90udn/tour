<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\Cruises;
use App\Destination;
use App\Country;
use App\CruisesCategory;

class CruisesController extends Controller
{

    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.tours.cruises.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('tours.cruises.index');
        $cruises = Cruises::query()
            ->filters($filters)
            ->orderBy('name','asc')
            ->paginate(20);
        return view('admin.tours.cruises.index', compact('cruises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('tours.cruises.create');

        $cruises = new Cruises();

        $destination = Destination::orderBy('name','asc')->get()->mapWithKeys(function($query){
            return [
                $query->name => $query->name,
            ];
        });



        $general = ['Free Wifi','Breakfast inc.','Private beach','24-hour room service','Airport Transfer','Babysitting','Bar','Business Center','Coffee Shop','Concierge','Elevator','Facilities for disabled guests','Family room','Laundry service','Meeting Facilities','Pool Bar','Restaurant','Room service','Safety box','Shops','Shuttle Service','Smoking Area','Tours'];



        $sports = ['Fitness Center','Garden','Massage','Outdoor Pool','Spa'];

        $internet = ['Free Wi-Fi in all rooms','Wi-Fi in public areas'];

        $car_part = ['Car Park','Valet Parking'];

        $amenitie = ['Non smoking rooms','Air Conditioning','Mini bar','Desk','Inhouse Movies','Satellite/Cable TV','In room safe','Shower','Bathtub','Hair Dryer','Ironing Facilities','Daily Newspaper','Complimentary bottled water','Bathrobes','Free Wifi'];

        $country = Country::all()->mapWithKeys(function($query){
            return [
                $query->location => $query->location,
            ];
        });

        $list = CruisesCategory::orderBy('name','asc')->get()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        })->toArray();

        $category = ['0' => 'Danh mục cha'];

        $category += $list;

        return view('admin.tours.cruises.create', compact('cruises','destination','general','sports','internet','amenitie','country','car_part','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('tours.cruises.create');

        $data = $request->except(['_token']);

        $data["ourviewpoits"] 	= @$data["forte"]."|".@$data["deficiency"];

        $data["times_distances"] = strip_tags(@$data["time_text"],'<p>,<table>,<tbody>,<tr>,<td>,<b>,<i>,<span>');
        // $data["policy"] 		= strip_tags($data["pol"],'a,p,b,strong,i,span,div,u')."|".strip_tags($data["pol1"],'a,p,b,strong,i,span,div,u')."|".strip_tags($data["pol2"],'a,p,b,strong,i,span,div,u')."|".strip_tags($data["pol3"],'a,p,b,strong,i,span,div,u')."|".strip_tags($data["pol4"],'a,p,b,strong,i,span,div,u');

        $data["updatetime"]       = time();

        $arr_general = array();
        $arr_sports = array();
        $arr_internet = array();
        $arr_car_part = array();
        
        $data["general"] = $data["general"] ?: ["Free Wifi"];

        for($i=0;$i<count($data["general"]);$i++){
            if($i==0){
                $arr_general = $data["general"][$i];
            }else{
                $arr_general = $arr_general.",".$data["general"][$i];
            }
        }

        $data["sports"] = $request->sports ?: ["Massage"];

        for($i=0;$i<count($data["sports"]);$i++){
            if($i==0){
                $arr_sports = $data["sports"][$i];
            }else{
                $arr_sports = $arr_sports.",".$data["sports"][$i];
            }
        }

        $data["car_part"] = $request->car_part ?: ["Car Park"];

        for($i=0;$i<count($data["car_part"]);$i++){
            if($i==0){
                $arr_car_part = $data["car_part"][$i];
            }else{
                $arr_car_part = $arr_car_part.",".$data["car_part"][$i];
            }
        }
        // $data["facilities"] = $arr_general."#".$arr_sports."#".$arr_car_part;

        $fac_room = array();

        $data["price_e"] = "";

        for($j=0;$j<$data["roomTotal"];$j++){
            $t = $j+1;
            $k = $j+3;
            $photo2 = "";
            for($i=0;$i<count(@$data["amenitie$j"]);$i++) {
                if ($i == 0) {
                    $fac_room[$j] = @$data["amenitie$j"][$i];
                } else {
                    $fac_room[$j] = $fac_room[$j] . "," . @$data["amenitie$j"][$i];
                }
            }

            $arrHotelImages = @$data["roomimages$t"];
            $data["roomimages"] = "";
            if(isset($arrHotelImages)){
                for($i=0;$i<count($arrHotelImages);$i++){
                    if($i==count($arrHotelImages)-1){
                        $data["roomimages"].=$arrHotelImages[$i];
                    }else{
                        $data["roomimages"].=$arrHotelImages[$i].",";
                    }
                }
            }

            @$fac[$j] = $fac_room[$j]."}".@$data["expansion$j"];
            @$data["price_e"]  .= strip_tags(@$data["roomtype$t"])."|".strip_tags(@$data["area$t"])."|".strip_tags(@$data["style$t"])."|".@$data["description$t"]."|".$fac[$j]."|".$photo2."|".@$data["room_number$t"]."|".@$data["note_hotel$t"]."|".@$data["roomimages"]."#";
        }

        // $dem = 0;
        // $daka = array();
        // $k_di = 12;
        // $total_dining = count($data["name_di"]) + $k_di;
        // foreach($data["name_di"] as $key=>$value){
        //     if($k_di < $total_dining){
        //         $k_di++;
        //         $photo_ding = "";
        //         if(!empty($value)){
        //             $dem = $dem++;
        //             $data_dining  = array();
        //             $data_dining["name"] 			= $data["name_di"][$key];
        //             $data_dining["capacity"] 		= $data["capacity"][$key];
        //             $data_dining["food_style"]		= $data["food_style"][$key];
        //             $data_dining["opening"]			= $data["opening"][$key];
        //             $data_dining["des_dining"]		= strip_tags($data["des_dining"][$key],'<br>,<br/>');
        //             $daka[$key]						= $data_dining["name"]."|".$data_dining["capacity"]."|".$data_dining["food_style"]."|".$data_dining["opening"]."|".$data_dining["des_dining"]."|".$photo_ding;
        //         }
        //     }
        // }

        // $data["dining"] = "";
        // for ($i=0; $i < count($daka) ; $i++) {
        //     $thang = "#";
        //     if($i==(count($daka)-1)){
        //         $thang = "";
        //     }
        //     $data["dining"] .= $daka[$i].$thang;
        // }

        $review = array();
        foreach ($data["name_rev"] as $key => $value) {
            if(!empty($value)){
                $data_rev 					= array();
                $data_rev["name_rev"] 		= $data["name_rev"][$key];
                $data_rev["country"] 		= $data["country"][$key];
                $data_rev["facilities_rev"] = $data["facilities_rev"][$key];
                $data_rev["room_rev"]		= $data["room_rev"][$key];
                $data_rev["dining_rev"] 	= $data["dining_rev"][$key];
                $data_rev["comment"]		= $data["comment"][$key];
            }
            $review[$key]				= $data_rev["name_rev"]."|".$data_rev["country"]."|".$data_rev["facilities_rev"]."|".$data_rev["room_rev"]."|".$data_rev["dining_rev"]."|".$data_rev["comment"];
        }

        $data["review"] = "";

        for ($i=0; $i < count($review) ; $i++) {
            $thang = "#";
            if($i==(count($review)-1)){
                $thang = "";
            }
            $data["review"]	.= $review[$i].$thang;
        }

        $data['name_link'] = str_slug($data['name']);

        $data['fac_high'] = implode(',',$data['fac_high']);

        $data["description"] 	= str_limit($data["oveview"],200);

        // $data["detail"]			= strip_tags($data["oveview"],'<br>,<br/>,<b>,<i>');

        $data["times_distances"] = strip_tags(@$data["time_text"],'<p>,<table>,<tbody>,<tr>,<td>,<b>,<i>,<span>');

        $data["meeting_rooms"] = @$data["meeting_text"]."#".'';

        $cruises = Cruises::create($data);

        flash('Cruisess published.', 'success');

        return redirect()->route('admin.tours.cruises.edit',$cruises->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cruises $cruise)
    {
        $this->authorize('tours.cruises.edit', $cruise);
        
        $destination = Destination::orderBy('name','asc')->get()->mapWithKeys(function($query){
            return [
                $query->name => $query->name,
            ];
        });

        $general = ['Free Wifi','Breakfast inc.','Private beach','24-hour room service','Airport Transfer','Babysitting','Bar','Business Center','Coffee Shop','Concierge','Elevator','Facilities for disabled guests','Family room','Laundry service','Meeting Facilities','Pool Bar','Restaurant','Room service','Safety box','Shops','Shuttle Service','Smoking Area','Tours'];



        $sports = ['Fitness Center','Garden','Massage','Outdoor Pool','Spa'];

        $car_part = ['Car Park','Valet Parking'];


        $internet = ['Free Wi-Fi in all rooms','Wi-Fi in public areas'];

        $amenitie = ['Non smoking rooms','Air Conditioning','Mini bar','Desk','Inhouse Movies','Satellite/Cable TV','In room safe','Shower','Bathtub','Hair Dryer','Ironing Facilities','Daily Newspaper','Complimentary bottled water','Bathrobes','Free Wifi'];

        $country = Country::all()->mapWithKeys(function($query){
            return [
                $query->location => $query->location,
            ];
        });

        $list = CruisesCategory::orderBy('name','asc')->get()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        })->toArray();

        $category = ['0' => 'Danh mục cha'];

        $category += $list;

        return view('admin.tours.cruises.edit', compact('cruise','destination','general','sports','internet','amenitie','country','car_part','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cruises $cruise)
    {
        $this->authorize('tours.cruises.edit');

        $data = $request->except(['_token']);

        $data["ourviewpoits"] 	= @$data["forte"]."|".@$data["deficiency"];

        $data["times_distances"] = strip_tags(@$data["time_text"],'<p>,<table>,<tbody>,<tr>,<td>,<b>,<i>,<span>');
        // $data["policy"] 		= strip_tags(@$data["pol"],'a,p,b,strong,i,span,div,u')."|".strip_tags(@$data["pol1"],'a,p,b,strong,i,span,div,u')."|".strip_tags(@$data["pol2"],'a,p,b,strong,i,span,div,u')."|".strip_tags(@$data["pol3"],'a,p,b,strong,i,span,div,u')."|".strip_tags(@$data["pol4"],'a,p,b,strong,i,span,div,u');

        $data["updatetime"]       = time();

        $arr_general = array();
        $arr_sports = array();
        $arr_internet = array();
        $arr_car_part = array();
        
        $data["general"] = $request->general ?: ["Free Wifi"];

        for($i=0;$i<count($data["general"]);$i++){
            if($i==0){
                $arr_general = $data["general"][$i];
            }else{
                $arr_general = $arr_general.",".$data["general"][$i];
            }
        }

        $data["sports"] = $request->sports ?: ["Massage"];

        for($i=0;$i<count($data["sports"]);$i++){
            if($i==0){
                $arr_sports = $data["sports"][$i];
            }else{
                $arr_sports = $arr_sports.",".$data["sports"][$i];
            }
        }

        $data["car_part"] = $request->car_part ?: ["Car Park"];

        for($i=0;$i<count($data["car_part"]);$i++){
            if($i==0){
                $arr_car_part = $data["car_part"][$i];
            }else{
                $arr_car_part = $arr_car_part.",".$data["car_part"][$i];
            }
        }
        // $data["facilities"] = $arr_general."#".$arr_sports."#".$arr_car_part;

        $fac_room = array();

        $data["price_e"] = "";

        for($j=0;$j<$data["roomTotal"];$j++){
            $t = $j+1;
            $k = $j+3;
            $photo2 = "";
            for($i=0;$i<count(@$data["amenitie$j"]);$i++) {
                if ($i == 0) {
                    $fac_room[$j] = @$data["amenitie$j"][$i];
                } else {
                    $fac_room[$j] = $fac_room[$j] . "," . @$data["amenitie$j"][$i];
                }
            }

            $arrHotelImages = @$data["roomimages$t"];
            $data["roomimages"] = "";
            if(isset($arrHotelImages)){
                for($i=0;$i<count($arrHotelImages);$i++){
                    if($i==count($arrHotelImages)-1){
                        $data["roomimages"].=$arrHotelImages[$i];
                    }else{
                        $data["roomimages"].=$arrHotelImages[$i].",";
                    }
                }
            }

            @$fac[$j] = $fac_room[$j]."}".@$data["expansion$j"];
            @$data["price_e"]  .= strip_tags(@$data["roomtype$t"])."|".strip_tags(@$data["area$t"])."|".strip_tags(@$data["style$t"])."|".@$data["description$t"]."|".$fac[$j]."|".$photo2."|".@$data["room_number$t"]."|".@$data["note_hotel$t"]."|".@$data["roomimages"]."#";
        }

        // $dem = 0;
        // $daka = array();
        // $k_di = 12;
        // $total_dining = count($data["name_di"]) + $k_di;
        // foreach($data["name_di"] as $key=>$value){
        //     if($k_di < $total_dining){
        //         $k_di++;
        //         $photo_ding = "";
        //         if(!empty($value)){
        //             $dem = $dem++;
        //             $data_dining  = array();
        //             $data_dining["name"] 			= $data["name_di"][$key];
        //             $data_dining["capacity"] 		= $data["capacity"][$key];
        //             $data_dining["food_style"]		= $data["food_style"][$key];
        //             $data_dining["opening"]			= $data["opening"][$key];
        //             $data_dining["des_dining"]		= strip_tags($data["des_dining"][$key],'<br>,<br/>');
        //             $daka[$key]						= $data_dining["name"]."|".$data_dining["capacity"]."|".$data_dining["food_style"]."|".$data_dining["opening"]."|".$data_dining["des_dining"]."|".$photo_ding;
        //         }
        //     }
        // }

        // $data["dining"] = "";
        // for ($i=0; $i < count($daka) ; $i++) {
        //     $thang = "#";
        //     if($i==(count($daka)-1)){
        //         $thang = "";
        //     }
        //     $data["dining"] .= $daka[$i].$thang;
        // }

        $review = array();
        foreach (@$data["name_rev"] as $key => $value) {
            if(!empty($value)){
                @$data_rev 					= array();
                @$data_rev["name_rev"] 		= @$data["name_rev"][$key];
                @$data_rev["country"] 		= @$data["country"][$key];
                @$data_rev["facilities_rev"] = @$data["facilities_rev"][$key];
                @$data_rev["room_rev"]		= @$data["room_rev"][$key];
                @$data_rev["dining_rev"] 	= @$data["dining_rev"][$key];
                @$data_rev["comment"]		= @$data["comment"][$key];
            }
            $review[$key]				= @$data_rev["name_rev"]."|".@$data_rev["country"]."|".@$data_rev["facilities_rev"]."|".@$data_rev["room_rev"]."|".@$data_rev["dining_rev"]."|".@$data_rev["comment"];
        }

        $data["review"] = "";

        for ($i=0; $i < count($review) ; $i++) {
            $thang = "#";
            if($i==(count($review)-1)){
                $thang = "";
            }
            $data["review"]	.= $review[$i].$thang;
        }

        $data['name_link'] = str_slug($data['name']);

        $data['fac_high'] = @implode(',',$data['fac_high']);

        $data["description"] 	= str_limit($data["oveview"],200);

        // $data["detail"]			= strip_tags($data["oveview"],'<br>,<br/>,<b>,<i>');

        $data["times_distances"] = strip_tags(@$data["time_text"],'<p>,<table>,<tbody>,<tr>,<td>,<b>,<i>,<span>');

        $arrImages = $data['images'];

        $data['photo_e'] = '';

        if(isset($arrImages)){
            for($i=0;$i<count($arrImages);$i++){
                if($i==count($arrImages)-1){
                    $data['photo_e'].=$arrImages[$i];
                }else{
                    $data['photo_e'].=$arrImages[$i]."|";
                }
            }
        }

        $data["meeting_rooms"] = @$data["meeting_text"]."#".'';

        $cruise->update($data);

        flash('Cruise updated.', 'success');

        return redirect()->route('admin.tours.cruises.edit',$cruise->id);
    }
}