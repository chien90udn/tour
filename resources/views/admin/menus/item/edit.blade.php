{!! Form::open([
    'url' => route('admin.themes.menus.item.update', ['menu' => $menu->id, 'item' => $item->id]),
    'class' => 'form-horizontal form-bordered form-validate',
    'data-callback' => 'refreshBuilder',
    'method' => 'put'
]) !!}
    @include('admin.menus.item.form')
{!! Form::close() !!}
