<?php

namespace App\Http\Controllers\Admin\Customized;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\Customized;

class CustomizedController extends Controller
{
    /**
     * PageController constructor.
     */
    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.customized.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('customized.index');
        $customized = Customized::query()
            ->filters($filters)
            ->paginate(20);
        return view('admin.customized.index', compact('customized'));
    }

    public function show(Customized $customized)
    {
        return view('admin.customized.edit', compact('customized'));
    }
}
