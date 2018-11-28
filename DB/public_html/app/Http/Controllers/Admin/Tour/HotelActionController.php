<?php

namespace App\Http\Controllers\Admin\Tour;


use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use App\Hotel;

class HotelActionController extends ActionController
{
    protected function destroy(Request $request)
    {
        $this->authorize('tours.hotels.destroy');

        $hotels = Hotel::query()->whereIn('id', $this->item)->get();

        if ($hotels->isNotEmpty()) {
            $hotels->each(function ($hotels) {
                $hotels->delete();
            });

            flash('Groups deleted successfully.', 'success');
            return redirect()->route('admin.tours.hotels.index');
        }

        flash('Selected data does not exist.', 'danger');
        return redirect()->route('admin.tours.hotels.index');
    }
}