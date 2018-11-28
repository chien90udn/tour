{!! Form::open(['url' => route('admin.themes.menus.item.store', $menu->id),
    'class' => 'form-horizontal form-bordered form-validate',
    'data-callback' => 'refreshBuilder',
    'method' => 'POST'
]) !!}
    @include('admin.menus.item.form')
{!! Form::close() !!}
