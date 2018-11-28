<?php

namespace App\Http\Controllers\Admin\Option;

use Illuminate\Http\Request;
use App\UserPermissionGroup;
use App\Option;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class OptionController extends Controller
{
    /**
     * PageController constructor.
     */
    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.option.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('option.index');
        $option = Option::all();
        return view('admin.option.index',['option' => $option]);
    }

    public function save(Request $request)
    {
        $data = $request->except(['_token']);

        foreach ($data as $name => $value)
        {
            update_option($name, $value);
        }
        flash('Đã lưu cấu hình thành công.', 'success');
        return redirect()->route('admin.option.index');
    }
}
