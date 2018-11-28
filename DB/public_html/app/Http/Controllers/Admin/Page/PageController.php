<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\Page;

class PageController extends Controller
{

    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.pages.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('pages.index');
        $pages = Page::query()
            ->filters($filters)
            ->paginate(20);
        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('pages.create');

        $page = new Page();

        return view('admin.pages.create', compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('pages.create');

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required',
            'name_link' => 'required',
        ]);

        $page = Page::create($data);

        flash('Page published.', 'success');

        return redirect()->route('admin.pages.edit',$page->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        $this->authorize('edit', $page);

        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        $this->authorize('pages.edit');

        $data = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required',
            'name_link' => 'required',
        ]);
        
        $page->update($data);

        flash('Page updated.', 'success');

        return redirect()->route('admin.pages.edit',$page->id);
    }
}