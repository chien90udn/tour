<?php

namespace App\Http\Controllers\Admin\Booking;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Filters\NameFilters;
use App\Book;

class BookingController extends Controller
{
    /**
     * PageController constructor.
     */
    public function __construct()
    {
        app('navigation')->setCurrentItem('admin.booking.index');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(NameFilters $filters)
    {
        $this->authorize('pages.index');
        $booking = Book::query()
            ->filters($filters)
            ->paginate(20);
        return view('admin.booking.index', compact('booking'));
    }

    public function show(Book $booking)
    {
        return view('admin.booking.edit', compact('booking'));
    }
}
