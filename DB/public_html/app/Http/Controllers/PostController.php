<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\Repositories\PostRepository;

class PostController extends Controller
{

    protected $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function show($slug)
    {
        $post = $this->postRepository->getViaSlug($slug);

        if (!$post) {
            abort(404);
        }

        $title = $post->name;
        $description = $post->description;

        return view('blog.post.index', compact('post','title','description'));
    }

    public function search(Request $request)
    {
        $posts = $this->postRepository->search($request->get('q'), true, 0, 12);
        $title = 'Tìm kiếm nội dung';
        $description = 'Tìm kiếm nội dung';
        return view('blog.post.search', compact('posts','title','description'));
    }
}