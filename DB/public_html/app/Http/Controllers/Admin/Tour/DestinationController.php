<?php

namespace App\Http\Controllers\Admin\Tour;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\Destination;

class DestinationController extends Controller
{

    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.tours.destinations.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('tours.destinations.index');
        $destinations = Destination::query()
            ->filters($filters)
            ->orderBy('name','asc')
            ->paginate(20);
        return view('admin.tours.destinations.index', compact('destinations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('tours.destinations.create');

        $destinations = new Destination();

        return view('admin.tours.destinations.create', compact('destinations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('tours.destinations.create');

        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->except(['_token']);

        for($i = 1; $i < 13; $i++) {
            $data['months_good'][] = @$data['months_'.$i];
        }

        @$data['months'] = implode(@$data['months'],',');
        @$data['months_good'] = implode(@$data['months_good'],',');

        @$data['photo_e'] = @$data['photo'];

        $destinations = Destination::create($data);

        flash('Destinations published.', 'success');

        return redirect()->route('admin.tours.destinations.edit',$destinations->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Destination $destination)
    {
        $this->authorize('tours.destinations.edit', $destination);

        return view('admin.tours.destinations.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destination $destination)
    {
        $this->authorize('tours.destinations.edit');

        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->except(['_token']);

        for($i = 1; $i < 13; $i++) {
            $data['months_good'][] = @$data['months_'.$i];
        }

        @$data['months'] = implode(@$data['months'],',');
        @$data['months_good'] = implode(@$data['months_good'],',');

        @$data['photo_e'] = @$data['photo'];

        $destination->update($data);


        flash('Destination updated.', 'success');

        return redirect()->route('admin.tours.destinations.edit',$destination->id);
    }
}