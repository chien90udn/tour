<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\ActionController;
use App\Post;
use Illuminate\Http\Request;

class PostActionController extends ActionController
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function destroy(Request $request)
    {
        $this->authorize('post.destroy');

        $post = Post::query()->whereIn('id', $this->item)->get();

        if ($post->isNotEmpty()) {
            $post->each(function ($page) {
                $page->delete();
            });

            flash('Đã xóa bài viết thành công.', 'success');
            return redirect()->route('admin.post.index');
        }

        flash('Dữ liệu được chọn không tồn tại.', 'danger');
        return redirect()->route('admin.post.index');
    }
}
