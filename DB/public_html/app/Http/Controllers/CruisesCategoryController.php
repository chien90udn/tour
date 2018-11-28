<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Repositories\CruisesCategoryRepository;
use App\Support\Repositories\CruisesRepository;


class CruisesCategoryController extends Controller
{
    protected $categoryRepository;
    protected $cruisesRepository;

    public function __construct(CruisesCategoryRepository $cruisesCategoryRepository, CruisesRepository $cruisesRepository)
    {
        $this->categoryRepository = $cruisesCategoryRepository;
        $this->cruisesRepository = $cruisesRepository;
    }

    public function show(CruisesRepository $cruisesRepository,$slug)
    {
        $category = $this->categoryRepository->getViaSlug($slug, true);

        if (!$category) {
            abort(404);
        }

        $cruises = $cruisesRepository->getCruisesViaCategoires($category, 12, true);

        return view('cruises.cruise.list', compact('category','cruises'));

    }
}