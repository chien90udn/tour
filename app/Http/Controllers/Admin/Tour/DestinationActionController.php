<?php

namespace App\Http\Controllers\Admin\Tour;


use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use App\Destination;

class DestinationActionController extends ActionController
{
    protected function destroy(Request $request)
    {
        $this->authorize('tours.destinations.destroy');

        $destinations = Destination::query()->whereIn('id', $this->item)->get();

        if ($destinations->isNotEmpty()) {
            $destinations->each(function ($destinations) {
                $destinations->delete();
            });

            flash('Destinations deleted successfully.', 'success');
            return redirect()->route('admin.tours.destinations.index');
        }

        flash('Selected data does not exist.', 'danger');
        return redirect()->route('admin.tours.destinations.index');
    }
}