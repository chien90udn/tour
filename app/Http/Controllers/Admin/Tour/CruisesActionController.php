<?php

namespace App\Http\Controllers\Admin\Tour;


use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use App\Hotel;

class CruisesActionController extends ActionController
{
    protected function destroy(Request $request)
    {
        $this->authorize('tours.cruises.destroy');

        $cruises = Hotel::query()->whereIn('id', $this->item)->get();

        if ($cruises->isNotEmpty()) {
            $cruises->each(function ($cruises) {
                $cruises->delete();
            });

            flash('Groups deleted successfully.', 'success');
            return redirect()->route('admin.tours.cruises.index');
        }

        flash('Selected data does not exist.', 'danger');
        return redirect()->route('admin.tours.cruises.index');
    }
}