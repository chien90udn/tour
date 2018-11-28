<?php

namespace App\Http\Controllers\Admin\Tour;


use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use App\Group;

class GroupActionController extends ActionController
{
    protected function destroy(Request $request)
    {
        $this->authorize('tours.groups.destroy');

        $groups = Group::query()->whereIn('id', $this->item)->get();

        if ($groups->isNotEmpty()) {
            $groups->each(function ($groups) {
                $groups->delete();
            });

            flash('Groups deleted successfully.', 'success');
            return redirect()->route('admin.tours.groups.index');
        }

        flash('Selected data does not exist.', 'danger');
        return redirect()->route('admin.tours.groups.index');
    }
}