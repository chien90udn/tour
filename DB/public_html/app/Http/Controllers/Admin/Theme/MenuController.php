<?php

namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\Menu;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{

    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.themes.menus.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,NameFilters $filters)
    {
        $this->authorize('pages.index');
        $menus = Menu::orderBy('slug')->get()->filter(function($menu) {
            if($menu->id === 1) {
                return Auth::user()->is_super_admin;
            }
            return true;
        })->mapWithKeys(function($menu) {
            return [$menu->slug => $menu->slug];
        });

        if($request->has('menu')) {
            $menu = Menu::whereSlug($request->get('menu'))->firstOrFail();
        }

        return view('admin.menus.index', compact('menus','menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('themes.menus.create');

        $menu = new Menu();

        return view('admin.menus.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('themes.menus.create');

        $menu = Menu::create($request->all());

        flash('Menu published.', 'success');

        return redirect()->route('admin.themes.menus.edit',$menu->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $this->authorize('edit', $menu);

        return view('admin.menus.edit', compact('menu'));
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