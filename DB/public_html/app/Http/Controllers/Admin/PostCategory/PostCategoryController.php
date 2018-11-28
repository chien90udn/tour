<?php

namespace App\Http\Controllers\Admin\PostCategory;

use Illuminate\Http\Request;
use App\Http\Filters\PostCategoryFilters;
use App\PostCategory;
use App\UserPermissionGroup;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class PostCategoryController extends Controller
{
    /**
     * PageController constructor.
     */
    public function __construct()
    {
        View::composer('admin.postcategory.form', function ($view) {
            $view->with('permissionGroups', UserPermissionGroup::query()
                ->with('permissions')
                ->get());
        });

        app('navigation')->setCurrentItem('admin.post.category.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostCategoryFilters $filters)
    {
        $this->authorize('post.category.index');

        $postCategory = PostCategory::query()
            ->filters($filters)
            ->paginate(20);

        return view('admin.postcategory.index', compact('postCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('post.category.create');

        $postCategory = new PostCategory();
        $postCategory->published = true;
        return view('admin.postcategory.create', compact('postCategory'));
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

        if ($postCategory = PostCategory::create($data)) {
            flash('Đã lưu danh mục thành công.', 'success');
        } else {
            flash('Đã lưu danh mục thất bại.', 'error');
        }
        return redirect()->route('admin.post.category.create');
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
    public function edit(PostCategory $postCategory)
    {
        $this->authorize('edit', $postCategory);

        return view('admin.postcategory.edit', compact('postCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostCategory $postCategory)
    {
        $this->authorize('edit', $postCategory);
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:191'
        ]);
        $data = $request->except(['_token', 'language']);

        $data['name_link'] = str_slug($data['name']);

        $postCategory->update($data);
        flash('Đã lưu thông tin thành công.', 'success');
        return back();
    }
}
