<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\HotelCategory;

class HotelCategoryController extends Controller
{

    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.tours.hotelcategory.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('tours.hotelcategory.index');
        $hotelcategory = HotelCategory::query()
            ->filters($filters)
            ->orderBy('name','asc')
            ->paginate(20);
        return view('admin.tours.hotelcategory.index', compact('hotelcategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('tours.hotelcategory.create');

        $hotelcategory = new HotelCategory();

        $list = HotelCategory::orderBy('name','asc')->where('parent_id',0)->get()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        })->toArray();

        $category = ['0' => 'Danh mục cha'];

        $category += $list;



        return view('admin.tours.hotelcategory.create', compact('hotelcategory', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('tours.hotelcategory.create');

        $data = $request->except(['_token']);

        $data['name_link'] = str_slug($data['name']);
        $data['rcount'] = 0;
        $data['rorder'] = 0;

        $hotelcategory = HotelCategory::create($data);

        flash('Hotel Category published.', 'success');

        return redirect()->route('admin.tours.hotelcategory.edit',$hotelcategory->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(HotelCategory $hotelcategory)
    {
        $this->authorize('tours.hotelcategory.edit', $hotelcategory);

        $list = HotelCategory::orderBy('name','asc')->where('parent_id',0)->get()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        })->toArray();

        $category = ['0' => 'Danh mục cha'];

        $category += $list;

        return view('admin.tours.hotelcategory.edit', compact('hotelcategory','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HotelCategory $hotelcategory)
    {
        $this->authorize('tours.groups.edit');

        $data = $request->except(['_token']);

        $data['name_link'] = str_slug($data['name']);
        $data['rcount'] = 0;
        $data['rorder'] = 0;


        $hotelcategory->update($data);


        flash('Hotel Category updated.', 'success');

        return redirect()->route('admin.tours.hotelcategory.edit',$hotelcategory->id);
    }
}