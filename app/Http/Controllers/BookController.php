<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Book;
use Carbon\Carbon;
use App\Mail\BookingMail;

class BookController extends Controller
{
    public function tourBooking(Request $request)
    {
        $data = $request->except(['_token']);
        $data['class'] = $request->tour ?: 'Default';
        if($request->has('datepicker')){
          $data['date_arr'] = Carbon::createFromFormat('m/d/Y',$request->datepicker);
        }
        if($request->has('datepicker_input')){
         $data['date_flex'] = $request->datepicker_input;
        }
        $data['date_send'] = Carbon::now();
        if($booking = Book::create($data)){
            Mail::send(new BookingMail($booking));
            return redirect('/success');
        } 
        return abort(404); 
    }
}