<?php

namespace App\Http\Controllers\Admin\Tour;


use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use App\Tour;

class TourActionController extends ActionController
{
    protected function destroy(Request $request)
    {
        $this->authorize('tours.tours.destroy');

        $tours = Tour::query()->whereIn('id', $this->item)->get();

        if ($tours->isNotEmpty()) {
            $tours->each(function ($tours) {
                $tours->delete();
            });

            flash('Destinations deleted successfully.', 'success');
            return redirect()->route('admin.tours.tours.index');
        }

        flash('Selected data does not exist.', 'danger');
        return redirect()->route('admin.tours.tours.index');
    }
}