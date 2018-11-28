<?php

namespace App\Http\Controllers\Admin\Contact;


use App\Http\Controllers\ActionController;
use Illuminate\Http\Request;
use App\Contact;

class ContactActionController extends ActionController
{
    protected function destroy(Request $request)
    {
        $this->authorize('pages.destroy');

        $pages = Contact::query()->whereIn('id', $this->item)->get();

        if ($pages->isNotEmpty()) {
            $pages->each(function ($pages) {
                $pages->delete();
            });

            flash('Page deleted successfully.', 'success');
            return redirect()->route('admin.pages.index');
        }

        flash('Selected data does not exist.', 'danger');
        return redirect()->route('admin.pages.index');
    }
}