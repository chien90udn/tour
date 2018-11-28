<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Repositories\TourRepository;

class TourController extends Controller
{
    protected $tourRepository;

    public function __construct(TourRepository $tourRepository)
    {
        $this->tourRepository = $tourRepository;
    }

    public function show($slug)
    {
        $tour = $this->tourRepository->getViaSlug($slug);

        $title = $tour->seo_title ? $tour->seo_title : $tour->name;
        $description = $tour->seo_description ? str_limit($tour->seo_description,160) : str_limit($tour->description,160);
        $keyworld = $tour->tags;

        if (!$tour) {
            abort(404);
        }

        return view('tours.tour.index', compact('tour','title','description','keyworld'));
    }

    public function search(Request $request)
    {
        $tours = $this->tourRepository->search($request, true, 0, 15);

        if (!$tours) {
            abort(404);
        }

        return view('tours.tour.search', compact('tours'));

    }

    public function map($slug)
    {
        $tour = $this->tourRepository->getViaSlug($slug);
        if (!$tour) {
            abort(404);
        }
        return view('tours.tour.map', compact('tour'));
    }

}