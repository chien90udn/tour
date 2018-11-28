<td>{{ $item->id }}</td>
<td>
    <strong>{{ $item->name }}</strong> <br>
    <div class="row-action">
        <a href="{{ route('tours.show', $item->name_link) }}">
            <button type="button" class="btn btn-xs btn-default">
                <i class="fa fa-eye"></i> <span>View</span>
            </button>
        </a>
        @can('tours.cruisestours.edit')
            <a href="{{ route('admin.tours.cruisestours.edit', $item->id) }}">
                <button type="button" class="btn btn-xs btn-default">
                    <i class="fa fa-pencil-square"></i> <span>Edit</span>
                </button>
            </a>
        @endcan
        @can('delete', $item)
            <a href="#" data-url="{{ query_url($actionUrl, ['action' => 'destroy', 'id' => $item->id]) }}" data-action="link-confirm">
                <button type="button" class="btn btn-xs btn-default">
                    <i class="fa fa-trash"></i> <span>Delete</span>
                </button>
            </a>
        @endcan
    </div>
</td>
<td>{{ $item->country }}</td>
