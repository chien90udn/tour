<?php

namespace App\Http\Controllers\Admin\Theme;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Support\ViewComposer;
use App\Menu;
use App\MenuItem;

class ItemController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,Menu $menu)
    {
        if(! $request->ajax()) {
            return;
        }

        $items = $menu->items;

        return view('admin.menus.item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, Menu $menu, MenuItem $item)
    {
        if(! $request->ajax()) {
            return;
        }

        ViewComposer::dropdownItemsMenu($menu);

        return view('admin.menus.item.create', compact('menu','item'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Menu $menu)
    {


        $data = $request->except(['_token', 'language']);

        $data['menu_id'] = $menu->id;

        $menuItem = MenuItem::create($data);

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Menu $menu, $id)
    {
        if(! $request->ajax()) {
            return;
        }

        $item = MenuItem::findOrFail($id);

        ViewComposer::dropdownItemsMenu($menu, $item->parent_id);

        return view('admin.menus.item.edit', compact('menu','item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu, $id)
    {

        $item = MenuItem::findOrFail($id);

        $data = $request->except(['_token', 'language']);
        $data['menu_id'] = $menu->id;
        $item->update($data);

        if($request->input('parent_id') !== $item->parent_id) {
            $item->resolveUpdated();
        }

        return back();

    }



    public function sort(Request $request, Menu $menu)
    {

        if(! $request->ajax()) {
            return;
        }

        MenuItem::updateAllPosition($request->input('data'), 0);
        return response()->json(['status' => 200]);
    }

    public function destroy(Request $request, Menu $menu, $id)
    {

        $item = MenuItem::findOrFail($id);
        $item->resolveDelete($item);

        return back();
    }
}
