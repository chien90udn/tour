<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\Group;

class GroupController extends Controller
{

    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.tours.groups.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('tours.groups.index');
        $groups = Group::query()
            ->filters($filters)
            ->orderBy('name','asc')
            ->paginate(20);
        return view('admin.tours.groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('tours.groups.create');

        $groups = new Group();


        $list = Group::orderBy('name','asc')->get()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        })->toArray();

        $category = ['0' => 'Danh mục cha'];

        $category += $list;

        return view('admin.tours.groups.create', compact('groups', 'category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('tours.groups.create');

        $data = $request->except(['_token']);
        if(!$request->has('name_link')){
                    $data['name_link'] = str_slug($data['name']);
        } 
        $data['rcount'] = 0;
        $data['rorder'] = 0;

        $groups = Group::create($data);

        flash('Groups published.', 'success');

        return redirect()->route('admin.tours.groups.edit',$groups->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $this->authorize('tours.groups.edit', $group);

        $list = Group::orderBy('name','asc')->get()->mapWithKeys(function($query){
            return [
                $query->id => $query->name,
            ];
        })->toArray();

        $category = ['0' => 'Danh mục cha'];

        $category += $list;

        return view('admin.tours.groups.edit', compact('group', 'category'));
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
        if(!$request->has('name_link')){
            $data['name_link'] = str_slug($data['name']);
        } 
        $data['rcount'] = 0;
        $data['rorder'] = 0;


        $group->update($data);


        flash('Group updated.', 'success');

        return redirect()->route('admin.tours.groups.edit',$group->id);
    }
}