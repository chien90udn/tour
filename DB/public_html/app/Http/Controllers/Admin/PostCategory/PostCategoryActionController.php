<?php

namespace App\Http\Controllers\Admin\PostCategory;

use App\Http\Controllers\ActionController;
use App\PostCategory;
use Illuminate\Http\Request;

class PostCategoryActionController extends ActionController
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function destroy(Request $request)
    {
        $this->authorize('post.category.destroy');

        $postCategory = PostCategory::query()->whereIn('id', $this->item)->get();

        if ($postCategory->isNotEmpty()) {
            $postCategory->each(function ($postCategory) {
                $postCategory->delete();
            });

            flash('Đã xóa danh mục thành công.', 'success');
            return redirect()->route('admin.post.category.index');
        }

        flash('Dữ liệu được chọn không tồn tại.', 'danger');
        return redirect()->route('admin.post.category.index');
    }
}
