<td>
    <strong>{{ $item->name }}</strong> <br>
    <div class="row-action">
        <a href="{{ route('location.show', str_replace(' ','-',$item->name)) }}">
            <button type="button" class="btn btn-xs btn-default">
                <i class="fa fa-eye"></i> <span>View</span>
            </button>
        </a>
        @can('tours.destinations.edit')
            <a href="{{ route('admin.tours.destinations.edit', $item->id) }}">
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
<td>{{ $item->link }}</td>
<td>{!! $item->home ? '<i class="fa fa-check" aria-hidden="true"></i>' : '<i class="fa fa-times" aria-hidden="true"></i>' !!} </td>
<td>{{ $item->country }}</td>
