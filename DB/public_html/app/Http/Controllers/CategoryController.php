<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Repositories\PostRepository;
use App\Support\Repositories\PostCategoryRepository;

class CategoryController extends Controller
{
    protected $categoryRepository;
    protected $postRepository;

    public function __construct(PostCategoryRepository $postCategoryRepository, PostRepository $postRepository)
    {
        $this->categoryRepository = $postCategoryRepository;
        $this->postRepository = $postRepository;
    }

    public function show(PostRepository $postRepository,$slug)
    {
        $category = $this->categoryRepository->getViaSlug($slug, true);

        if (!$category) {
            abort(404);
        }

        $posts = $postRepository->getPostViaCategoires($category, 12, true);

        $title = $category->name;
        $description = $category->description;

        return view('blog.category.index', compact('category','posts','title','description'));

    }
}