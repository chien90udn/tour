<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Repositories\LocationRepository;
use App\Support\Repositories\PageRepository;
use App\Destination;

class LocationController extends Controller
{
    protected $localRepository;

    public function __construct(LocationRepository $localRepository, PageRepository $pageRepository)
    {
        $this->localRepository = $localRepository;
        $this->pageRepository = $pageRepository;
    }

    public function show($slug)
    {
        $location = $this->localRepository->getViaSlug($slug);

        if (!$location) {
            $page = $this->pageRepository->getPageViaSlug($slug, true);
            if (!$page) {
                abort(404);
            }
    
            $title = $page->name;
            $description = $page->description;
    
            return view('page.index', compact('page','title','description'));
        }

        $title = $location->name;


        return view('tours.destination.index', compact('location','title'));
    }

    public function all($country)
    {
        $locations = $this->localRepository->getAllDes($country,0);

        $title = $country;

        return view('tours.destination.all', compact('locations','title'));

    }
}