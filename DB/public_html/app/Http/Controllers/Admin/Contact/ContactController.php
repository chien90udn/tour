<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\Contact;

class ContactController extends Controller
{
    /**
     * PageController constructor.
     */
    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.contact.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('pages.index');
        $contact = Contact::query()
            ->filters($filters)
            ->paginate(20);
        return view('admin.contact.index', compact('contact'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }
}
