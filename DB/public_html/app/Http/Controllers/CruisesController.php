<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Repositories\CruisesRepository;
use App\CruisesTour;

class CruisesController extends Controller
{
    protected $cruiseRepository;

    public function __construct(CruisesRepository $cruiseRepository)
    {
        $this->cruiseRepository = $cruiseRepository;
    }

    public function show($slug)
    {
        $hotel = $this->cruiseRepository->getViaSlug($slug);

        $title = $hotel->seo_title ? $hotel->seo_title : $hotel->name;

        $description = $hotel->seo_description ? str_limit($hotel->seo_description,160) : str_limit($hotel->description,160);
        $keyworld = $hotel->tags;

        if (!$hotel) {
            abort(404);
        }

        return view('cruises.cruise.index', compact('hotel','title','description','keyworld'));
    }


    public function booking(Request $request, $slug)
    {
        // dd($request->all());
        $hotel = $this->cruiseRepository->getViaSlug($slug);

        $title = $hotel->seo_title ? $hotel->seo_title : $hotel->name;

        $description = $hotel->seo_description ? str_limit($hotel->seo_description,160) : str_limit($hotel->description,160);
        $keyworld = $hotel->tags;

        $package = CruisesTour::find($request->package);

        if (!$hotel) {
            abort(404);
        }

        return view('cruises.cruise.booking', compact('hotel','title','description','keyworld', 'package', 'request'));
    }

    public function showv1($slug)
    {
        $hotel = $this->cruiseRepository->getViaSlug($slug);

        if (!$hotel) {
            abort(404);
        }

        return view('cruises.cruise.index_bk', compact('hotel'));
    }

    public function search(Request $request)
    {
        $tours = $this->hotelRepository->search($request, true, 0, 15);

        if (!$tours) {
            abort(404);
        }

        return view('cruises.cruise.search', compact('tours'));

    }
}