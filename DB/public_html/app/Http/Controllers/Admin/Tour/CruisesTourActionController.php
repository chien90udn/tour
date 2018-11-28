<?php

namespace App\Http\Controllers\Admin\Tour;


use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use App\CruisesTour;

class CruisesTourActionController extends ActionController
{
    protected function destroy(Request $request)
    {
        $this->authorize('tours.cruisestours.destroy');

        $tours = CruisesTour::query()->whereIn('id', $this->item)->get();

        if ($tours->isNotEmpty()) {
            
            $tours->each(function ($tours) {
                $tours->delete();
            });

            flash('Destinations deleted successfully.', 'success');
            return redirect()->route('admin.tours.cruisestours.index');
        }

        flash('Selected data does not exist.', 'danger');
        return redirect()->route('admin.tours.cruisestours.index');
    }
}