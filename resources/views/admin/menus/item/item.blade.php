@foreach($items->sortBy('position') as $item)
    <li class="dd-item dd3-item" data-id="{{ $item->id }}">
        <div class="dd-handle dd3-handle">Drag</div>
        <div class="dd3-content">
            <div class="pull-right">
                @can('menu.item.edit')
                    {!! Form::button('Sửa', ['class' => 'btn btn-primary btn-xs', 'onclick' => 'editItem('.$item->menu_id.', '.$item->id.')']) !!}
                @endcan
                @can('menu.item.destroy')
                        {!! Form::button('Xóa', ['class' => 'btn btn-xs btn-danger', 'onclick' => 'confirm_to_delete('.$item->menu_id.', '.$item->id.')']) !!}
                @endcan
            </div>
            {{ $item->name }}
        </div>
        @if($item->children->count())
            <ol class="dd-list">
                @include('admin.menus.item.item', ['items' => $item->children])
            </ol>
        @endif
    </li>
@endforeach
