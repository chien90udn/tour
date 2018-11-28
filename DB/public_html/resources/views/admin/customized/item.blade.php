@php $data = json_decode($item->content);@endphp
<td>
    <strong>{{ @$data->info->yourname }}</strong> <br>
    <div class="row-action">
        @can('customized.edit')
            <a href="{{ route('admin.customized.show', $item->id) }}">
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
<td>{{ @$data->info->email }}</td>
<td>{{ $item->created_at->format('d/m/Y h:s') }}</td>
