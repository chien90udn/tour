<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\CruisesCategory;

class CruisesCategoryController extends Controller
{

    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.tours.cruisescategory.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('tours.cruisescategory.index');
        $cruisescategory = CruisesCategory::query()
            ->filters($filters)
            ->orderBy('name','asc')
            ->paginate(20);
        return view('admin.tours.cruisescategory.index', compact('cruisescategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('tours.cruisescategory.create');

        $cruisescategory = new CruisesCategory();

        $list = CruisesCategory::orderBy('name','asc')->get()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        })->toArray();

        $category = ['0' => 'Danh mục cha'];

        $category += $list;



        return view('admin.tours.cruisescategory.create', compact('cruisescategory', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('tours.cruisescategory.create');

        $data = $request->except(['_token']);

        $data['name_link'] = str_slug($data['name']);
        $data['rcount'] = 0;
        $data['rorder'] = 0;

        $cruisescategory = CruisesCategory::create($data);

        flash('Groups published.', 'success');

        return redirect()->route('admin.tours.cruisescategory.edit',$cruisescategory->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CruisesCategory $cruisescategory)
    {
        $this->authorize('tours.cruisescategory.edit', $cruisescategory);

        $list = CruisesCategory::orderBy('name','asc')->get()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        })->toArray();

        $category = ['0' => 'Danh mục cha'];

        $category += $list;

        return view('admin.tours.cruisescategory.edit', compact('cruisescategory','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $this->authorize('tours.groups.edit');

        $data = $request->except(['_token']);

        $data['name_link'] = str_slug($data['name']);
        $data['rcount'] = 0;
        $data['rorder'] = 0;


        $group->update($data);


        flash('Group updated.', 'success');

        return redirect()->route('admin.tours.groups.edit',$group->id);
    }
}