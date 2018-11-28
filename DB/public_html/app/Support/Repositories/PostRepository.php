<?php

namespace App\Support\Repositories;



use App\Post;
use App\PostCategory;
use Carbon\Carbon;

class PostRepository
{
    protected $posts;

    public function __construct(Post $post)
    {
        $this->posts = $post;
    }

    public function query()
    {
        return $this->posts->query();
    }

    public function getViaSlug($slug)
    {
        $post = $this->posts->where([
            ['name_link', '=', $slug]
        ])->firstOrFail();

        return $post;
    }

    public function getPosts(
        $limit = 10,
        $category_id = 0,
        $onlyShowPublished = true,
        $orderBy = 'latest'
    )
    {
        $query = $this->posts->query();

        if ($category_id) {
            $query = $query->where('cat_id', $category_id);
        }

        switch ($orderBy) {
            case 'latest':
                $query = $query->orderBy('id','desc');
                break;
        }

        return $query->limit($limit)->get();
    }

    public function getPostViaCategoires(PostCategory $category, $perPage = 10, $onlyPublished = false)
    {
        $query = $category->posts();

        $query = $query->orderBy('id','desc');

        return $perPage ? $query->paginate($perPage) : $query->get();
    }

    public function search($keyword, $onlyPublished = false, $limit = 10, $paginate = 0)
    {
        $keyword = '%' . $keyword . '%';
        $posts = $this->posts->where(function ($query) use ($keyword) {
            $query->orWhere('slug', 'like', $keyword);
            $query->orWhere('name', 'like', $keyword);
            $query->orWhere('content', 'like', $keyword);
        })->whereHas('categories', function ($q) {
                $q->whereNotIn('id', ['4']);
        });

        return $limit > 0  ? $posts->limit($limit)->get() :
            ($paginate > 0 ? $posts->paginate($paginate) : $posts->get());
    }
}