<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Support\Repositories\TourCategoryRepository;
use App\Support\Repositories\TourRepository;


class TourCategoryController extends Controller
{
    protected $categoryRepository;
    protected $tourRepository;

    public function __construct(TourCategoryRepository $tourCategoryRepository, TourRepository $tourRepository)
    {
        $this->categoryRepository = $tourCategoryRepository;
        $this->tourRepository = $tourRepository;
    }

    public function show(TourRepository $tourRepository,$slug, Request $request)
    {
        $category = $this->categoryRepository->getViaSlug($slug, true);

        $title = $category->seo_title ? $category->seo_title : $category->name;
        $description = $category->seo_description ? str_limit($category->seo_description,320) : strip_tags(str_limit($category->detail,320));
        $keyworld = $category->tags;
        
        if (!$category) {
            abort(404);
        }

        $tours = $tourRepository->getTourViaCategoires($category, 12, true);
        
        if($request->ajax()) {
            if($tours->count() >= 1){
                return view('tours.group.load', ['tours' => $tours, 'category' => $category, 'page' => $request->page])->render();  
            } else {
                return ;
            }
        }
        
        return view('tours.group.index', compact('category','tours','title','keyworld','description'));

    }
}