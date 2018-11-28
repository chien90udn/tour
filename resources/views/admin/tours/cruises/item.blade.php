<td>
    <strong>{{ $item->name }}</strong> <br>
    <div class="row-action">
        <a href="{{ route('cruise.show', $item->name_link) }}">
            <button type="button" class="btn btn-xs btn-default">
                <i class="fa fa-eye"></i> <span>View</span>
            </button>
        </a>
        @can('tours.cruises.edit')
            <a href="{{ route('admin.tours.cruises.edit', $item->id) }}">
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
<td>{{ $item->location }}</td>
<td>
    @for($i = 1; $i <= $item->grade; $i++)
        <i class="fa fa-star text-warning" aria-hidden="true"></i>
    @endfor
</td>
<td>{!!  $item->active == 'yes' ? '<i class="fa fa-check text-success" aria-hidden="true"></i>' : '<i class="fa fa-times text-danger" aria-hidden="true"></i>'  !!}</td>
