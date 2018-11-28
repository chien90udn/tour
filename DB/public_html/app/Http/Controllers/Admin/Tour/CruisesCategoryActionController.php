<?php

namespace App\Http\Controllers\Admin\Tour;


use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use App\CruisesCategory;

class CruisesCategoryActionController extends ActionController
{
    protected function destroy(Request $request)
    {
        $this->authorize('tours.cruisescategory.destroy');

        $cruisescategory = CruisesCategory::query()->whereIn('id', $this->item)->get();

        if ($cruisescategory->isNotEmpty()) {
            $cruisescategory->each(function ($cruisescategory) {
                $cruisescategory->delete();
            });

            flash('Cruises Category deleted successfully.', 'success');
            return redirect()->route('admin.tours.cruisescategory.index');
        }

        flash('Selected data does not exist.', 'danger');
        return redirect()->route('admin.tours.cruisescategory.index');
    }
}