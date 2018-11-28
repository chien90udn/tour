<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\Tour;
use App\Group;
use App\Destination;
use App\Country;

class TourController extends Controller
{

    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.tours.tours.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('tours.tours.index');
        $tours = Tour::query()
            ->filters($filters)
            ->orderBy('name','asc')
            ->paginate(20);
        return view('admin.tours.tours.index', compact('tours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('tours.tours.create');

        $tours = new Tour();

        $experiences = [
            '1' => 'Swimming',
            '2' => 'Cruising',
            '3' => 'Boating',
            '4' => 'Ethnic',
            '5' => 'Cultural',
            '6' => 'Heritage',
            '7' => 'Nature',
            '8' => 'Cuisine',
            '9' => 'Kayaking',
            '10' => 'Adventure',
            '11' => 'Beach',
            '12' => 'Wellness',
            '13' => 'Wildlife',
            '14' => 'History',
        ];

        $groups = Group::all()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        });

        $destination = Destination::orderBy('name','asc')->get()->mapWithKeys(function($query){
            return [
                $query->name => $query->name,
            ];
        });

        $country_review = Country::all()->mapWithKeys(function($query){
            return [
                $query->location => $query->location,
            ];
        });

        return view('admin.tours.tours.create', compact('tours','experiences','groups','destination','country_review'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('tours.tours.create');

        $request->validate([
            'tags' => 'max:255',
            'groups' => 'required',
        ],[
            'tags.max' => 'The Keywords may not be greater than 255 characters.',
            'groups.required' => 'Please chooise Tour Groups',
        ]);

        $data = $request->except(['_token']);
        
        $data["swim"] = $request->get('swimming') ?: '';
        $data["crui"] = $request->get('cruising') ?: '';
        $data["boat"] = $request->get('boating') ?: '';
        $data["ethnic"] = $request->get('ethnic') ?: '';
        $data["cultural"] = $request->get('cultural') ?: '';
        $data["heritage"] = $request->get('heritage') ?: '';
        $data["nature"] = $request->get('nature') ?: '';
        $data["cuisine"] = $request->get('cuisine') ?: '';
        $data["kayaking"] = $request->get('kayaking') ?: '';
        $data["adventure"] = $request->get('adventure') ?: '';
        $data["beach"] = $request->get('beach') ?: '';
        $data["wellness"] = $request->get('wellness') ?: '';
        $data["wildlife"] = $request->get('wildlife') ?: '';
        $data["history"] = $request->get('history') ?: '';
        $data['experience'] = $data["swim"].",".$data["crui"].",".$data["boat"].",".$data["ethnic"].",".$data["cultural"].",".$data["heritage"].",".$data["nature"].",".$data["cuisine"].",".$data["kayaking"].",".$data["adventure"].",".$data["beach"].",".$data["wellness"].",".$data["wildlife"].",".$data["history"];
        $data['countrys'] = $request->get('countrys') ?: [];

        $data["country"] = "";

        for($i=0;$i<count($data['countrys']);$i++){
            if($i==0){
                $data["country"] = $data["countrys"][$i];
            }else{
                $data["country"] = $data["country"].",".$data["countrys"][$i];
            }
        }

        for($i=0;$i<intval($data["duration"]);$i++){ $g = $i+1;
            $place = strip_tags($data["place"][$i],"<a>,<b>,<i>,<u>");
            $acti  = strip_tags($data["acti"][$i],"<a>,<b>,<i>,<u>");
            $meal  = strip_tags($data["meal"][$i],"<a>,<b>,<i>,<u>");
            $detail= strip_tags($data["detail_tour"][$i],"<a>,<b>,<i>,<u>,<p>,<br>");
            $image = intval($data["photo"][$i]);
            $trans = intval($data["trans"][$i]);
            $inciti  = strip_tags($data["inciti"][$i],"<a>,<b>,<i>,<u>");

            $place   = str_replace("|"," ",$place);     $place  = str_replace("#"," ",$place);
            $meal    = str_replace("|"," ",$meal);      $meal   = str_replace("#"," ",$meal);
            $detail  = str_replace("|"," ",$detail);    $detail = str_replace("#"," ",$detail);
            $inciti  = str_replace("|"," ",$inciti);    $inciti = str_replace("#"," ",$inciti);

            if($i==0){
                $data["detail"] = $place."|".$acti."|".$meal."|".$detail."|".$image."|".$trans."|".$inciti;
            }else{
                $data["detail"] = $data["detail"]."#".$place."|".$acti."|".$meal."|".$detail."|".$image."|".$trans."|".$inciti;
            }

        }


//        $data['route'] = implode('->',$data['route']);

        $data['map_point'] = '16.46346,107.58470,6';

        $arrImages = @$data['images'];

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

        $data["include"]      = nl2br($data["include"])."|".nl2br($data["exclude"]);

        $review = array();
        $data["review"] = "";
        $data_rev 					= array();
        foreach ($data["review_name"] as $key => $value) {
            if(!empty($value)){
                @$data_rev 					= array();
                @$data_rev["name"] 		= @$data["review_name"][$key];
                @$data_rev["country"] 		= @$data["review_country"][$key];
                @$data_rev["title"] = @$data["review_title"][$key];
                @$data_rev["grade"]		= @$data["review_grade"][$key];
                @$data_rev["comment"] 	= @$data["comment"][$key];
                @$data_rev["avatar"] 	= @$data["review_avatar"][$key];
            }
            $review[$key]				= @$data_rev["name"]."|".@$data_rev["country"]."|".@$data_rev["title"]."|".@$data_rev["grade"]."|".@$data_rev["comment"]."|".@$data_rev["avatar"];
        }
        for ($i=0; $i < count($review) ; $i++) {
            $thang = "#";
            if($i==(count($review)-1)){
                $thang = "";
            }
            $data["review"]	.= $review[$i].$thang;
        }

        $tours = Tour::create($data);

        flash('Tours published.', 'success');

        return redirect()->route('admin.tours.tours.edit',$tours->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        $this->authorize('tours.tours.edit', $tour);

        $experiences = [
            '1' => 'Swimming',
            '2' => 'Cruising',
            '3' => 'Boating',
            '4' => 'Ethnic',
            '5' => 'Cultural',
            '6' => 'Heritage',
            '7' => 'Nature',
            '8' => 'Cuisine',
            '9' => 'Kayaking',
            '10' => 'Adventure',
            '11' => 'Beach',
            '12' => 'Wellness',
            '13' => 'Wildlife',
            '14' => 'History',
        ];

        $country_review = Country::all()->mapWithKeys(function($query){
            return [
                $query->location => $query->location,
            ];
        });

        $groups = Group::all()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        });

        $destination = Destination::orderBy('name','asc')->get()->mapWithKeys(function($query) {
            return [
                $query->name => $query->name,
            ];
        });

        $country =  explode(',',$tour->country);

        // dd($tour->country);

        $experience = explode(',',$tour->experience);
        $experience = array_combine(range(1, count($experience)), $experience);

        $include = explode("|",$tour->include);

        $tour->include = @$include[0];
        $tour->exclude = @$include[1];


        return view('admin.tours.tours.edit', compact('tour','experiences','groups','destination','country','experience','country_review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        $this->authorize('tours.tours.edit', $tour);
        
        $request->validate([
            'tags' => 'max:255',
            'groups' => 'required',
        ],[
            'tags.max' => 'The Keywords may not be greater than 255 characters.',
            'groups.required' => 'Please chooise Tour Groups',
        ]);

        $data = $request->except(['_token']);

        $data["swim"] = $request->get('swimming') ?: '';
        $data["crui"] = $request->get('cruising') ?: '';
        $data["boat"] = $request->get('boating') ?: '';
        $data["ethnic"] = $request->get('ethnic') ?: '';
        $data["cultural"] = $request->get('cultural') ?: '';
        $data["heritage"] = $request->get('heritage') ?: '';
        $data["nature"] = $request->get('nature') ?: '';
        $data["cuisine"] = $request->get('cuisine') ?: '';
        $data["kayaking"] = $request->get('kayaking') ?: '';
        $data["adventure"] = $request->get('adventure') ?: '';
        $data["beach"] = $request->get('beach') ?: '';
        $data["wellness"] = $request->get('wellness') ?: '';
        $data["wildlife"] = $request->get('wildlife') ?: '';
        $data["history"] = $request->get('history') ?: '';
        $data['experience'] = $data["swim"].",".$data["crui"].",".$data["boat"].",".$data["ethnic"].",".$data["cultural"].",".$data["heritage"].",".$data["nature"].",".$data["cuisine"].",".$data["kayaking"].",".$data["adventure"].",".$data["beach"].",".$data["wellness"].",".$data["wildlife"].",".$data["history"];
        $data['countrys'] = $request->get('countrys') ?: [];
        
        $data["country"] = "";

        for($i=0;$i<count($data['countrys']);$i++){
            if($i==0){
                $data["country"] = $data["countrys"][$i];
            }else{
                $data["country"] = $data["country"].",".$data["countrys"][$i];
            }
        }


        for($i=0;$i<intval($data["duration"]);$i++){ $g = $i+1;
            $place = strip_tags($data["place"][$i],"<a>,<b>,<i>,<u>");
            $acti  = strip_tags($data["acti"][$i],"<a>,<b>,<i>,<u>");
            $meal  = strip_tags($data["meal"][$i],"<a>,<b>,<i>,<u>");
            $detail= strip_tags($data["detail_tour"][$i],"<a>,<b>,<i>,<u>,<p>,<br>");
            $image = intval($data["photo"][$i]);
            $trans = intval($data["trans"][$i]);
            $inciti  = strip_tags($data["inciti"][$i],"<a>,<b>,<i>,<u>");

            $place   = str_replace("|"," ",$place);     $place  = str_replace("#"," ",$place);
            $meal    = str_replace("|"," ",$meal);      $meal   = str_replace("#"," ",$meal);
            $detail  = str_replace("|"," ",$detail);    $detail = str_replace("#"," ",$detail);
            $inciti  = str_replace("|"," ",$inciti);    $inciti = str_replace("#"," ",$inciti);

            if($i==0){
                $data["detail"] = $place."|".$acti."|".$meal."|".$detail."|".$image."|".$trans."|".$inciti;
            }else{
                $data["detail"] = $data["detail"]."#".$place."|".$acti."|".$meal."|".$detail."|".$image."|".$trans."|".$inciti;
            }
        }

//        $data['route'] = implode('->',$data['route']);

        $data['map_point'] = '16.46346,107.58470,6';

        $arrImages = @$data['images'];

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

        $data["include"]      = nl2br($data["include"])."|".nl2br($data["exclude"]);

        $review = array();
        $data["review"] = "";
        $data_rev 					= array();
        foreach ($data["review_name"] as $key => $value) {
            if(!empty($value)){
                @$data_rev 					= array();
                @$data_rev["name"] 		= @$data["review_name"][$key];
                @$data_rev["country"] 		= @$data["review_country"][$key];
                @$data_rev["title"] = @$data["review_title"][$key];
                @$data_rev["grade"]		= @$data["review_grade"][$key];
                @$data_rev["comment"] 	= @$data["comment"][$key];
                @$data_rev["avatar"] 	= @$data["review_avatar"][$key];
            }
            $review[$key]				= @$data_rev["name"]."|".@$data_rev["country"]."|".@$data_rev["title"]."|".@$data_rev["grade"]."|".@$data_rev["comment"]."|".@$data_rev["avatar"];
        }
        for ($i=0; $i < count($review) ; $i++) {
            $thang = "#";
            if($i==(count($review)-1)){
                $thang = "";
            }
            $data["review"]	.= $review[$i].$thang;
        }

        // dd($data);

        $tour->update($data);
        $tour->groups()->sync($data['groups']);

        flash('Tour updated.', 'success');

        return redirect()->route('admin.tours.tours.edit',$tour->id);
    }
}