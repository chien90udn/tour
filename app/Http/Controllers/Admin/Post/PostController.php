<?php

namespace App\Http\Controllers\Admin\Post;

use Illuminate\Http\Request;
use App\Http\Filters\PostFilters;
use App\Post;
use App\UserPermissionGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * PageController constructor.
     */
    public function __construct()
    {
        View::composer('admin.post.form', function ($view) {
            $view->with('permissionGroups', UserPermissionGroup::query()
                ->with('permissions')
                ->get());
        });

        app('navigation')->setCurrentItem('admin.post.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostFilters $filters)
    {
        $this->authorize('post.category.index');

        $post = Post::query()
            ->filters($filters)
            ->paginate(20);

        return view('admin.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('post.category.create');

        $post = new Post();
        $post->published = true;
        return view('admin.post.create', compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:191'
        ]);
        $data = $request->except(['_token', 'language']);
        $data['name_link'] = str_slug($data['name']);
        $data['date_show'] = Carbon::now();
        if ($post = Post::create($data)) {
            flash('Đã thêm bài viết "'. $post->name .'"" thành công.', 'success');
        } else {
            flash('Đã thêm bài viết thất bại.', 'error');
        }
        return redirect()->route('admin.post.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $this->authorize('edit', $post);

        return view('admin.post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:191'
        ]);
        $data = $request->except(['_token', 'language']);
        $data['name_link'] = str_slug($data['name']);
        $data['date_show'] = Carbon::now();
        $data['category'] = @$data['category'] ?: [];
        $data['user_id'] = $request->user()->id;
        if($post->update($data))
        {
            flash('Đã lưu bài viết thành công.', 'success');
        }
        else {
            flash('Đã lưu bài viết thất bại.', 'error');
        }
        return back();
    }
}
