<td>
    <strong>{{ $item->name }}</strong><br>
    <div class="row-action">
        <a href="{{ $item->link }}">
            <button type="button" class="btn btn-xs btn-default">
                <i class="fa fa-eye"></i> <span>Xem</span>
            </button>
        </a>
        @can('post.post.edit')
            <a href="{{ route('admin.post.edit', $item->id) }}">
                <button type="button" class="btn btn-xs btn-default">
                    <i class="fa fa-pencil-square"></i> <span>Sửa</span>
                </button>
            </a>
        @endcan
        @can('post.post.destroy')
            <a href="#" data-url="{{ query_url(route('admin.post.actions'), ['action' => 'destroy', 'id' => $item->id]) }}" data-action="link-confirm">
                <button type="button" class="btn btn-xs btn-default">
                    <i class="fa fa-trash"></i> <span>Xóa</span>
                </button>
            </a>
        @endcan
    </div>
</td>
<td>{!! $item->tags !!}</td>
<td>{{ $item->categories->name }}</td>