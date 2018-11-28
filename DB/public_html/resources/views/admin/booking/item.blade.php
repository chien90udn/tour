<td>
    <strong>{{ $item->name }}</strong> <br>
    <div class="row-action">
        @can('contact.edit')
            <a href="{{ route('admin.booking.show', $item->id) }}">
                <button type="button" class="btn btn-xs btn-default">
                    <i class="fa fa-eye"></i> <span>View</span>
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
<td>{{ $item->email }}</td>
<td>{{ @$item->tours->name ?: $item->cruise->name }}</td>
<td>{{ $item->date_send->format('d/m/Y h:s') }}</td>
