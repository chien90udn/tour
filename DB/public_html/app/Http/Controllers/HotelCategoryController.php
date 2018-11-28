<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Repositories\HotelCategoryRepository;
use App\Support\Repositories\HotelRepository;
use App\Support\Repositories\LocationRepository;


class HotelCategoryController extends Controller
{
    protected $categoryRepository;
    protected $hotelRepository;

    public function __construct(HotelCategoryRepository $hotelCategoryRepository, HotelRepository $hotelRepository, LocationRepository $localRepository)
    {
        $this->categoryRepository = $hotelCategoryRepository;
        $this->tourRepository = $hotelRepository;
        $this->localRepository = $localRepository;
    }

    public function show(HotelRepository $hotelRepository,$slug, Request $request)
    {
        $category = $this->categoryRepository->getViaSlug($slug, true);

        if (!$category) {
            abort(404);
        }
        if(strpos($slug,'hotels')){
            $locations = [str_replace(" Hotels","",$category->name)];
        } else {
            $locations = $this->localRepository->getAllDes($slug,0)->map(function ($item, $key) {
                return $item->name;
            })->all();
        }

        // dd($locations);

        // $hotels = $hotelRepository->getHotelsViaDestination($locations,12,true);

        $hotels = $hotelRepository->getHotelsViaCategoires($category,12,true);

        if($request->ajax()) {
            if($hotels->count() >= 1){
                return view('hotels.hotel.load', ['hotels' => $hotels, 'category' => $category, 'page' => $request->page])->render();  
            } else {
                return ;
            }
        }

        // $hotels = $hotelRepository->getHotelsViaCategoires($category, 12, true);

        return view('hotels.hotel.list', compact('category','hotels'));

    }
}