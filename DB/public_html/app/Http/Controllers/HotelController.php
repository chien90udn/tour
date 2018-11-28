<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Repositories\HotelRepository;

class HotelController extends Controller
{
    protected $hotelRepository;

    public function __construct(HotelRepository $hotelRepository)
    {
        $this->hotelRepository = $hotelRepository;
    }

    public function show($slug)
    {
        $hotel = $this->hotelRepository->getViaSlug($slug);

        $title = $hotel->seo_title ? $hotel->seo_title : $hotel->name;

        $description = $hotel->seo_description ? str_limit($hotel->seo_description,160) : str_limit($hotel->description,160);
        $keyworld = $hotel->tags;

        if (!$hotel) {
            abort(404);
        }

        return view('hotels.hotel.index', compact('hotel','title','description','keyworld'));
    }

    public function search(Request $request)
    {
        $tours = $this->hotelRepository->search($request, true, 0, 15);

        if (!$tours) {
            abort(404);
        }

        return view('hotels.hotel.search', compact('tours'));

    }
}