@can('themes.menus.index')
    @section('back', route('admin.themes.menus.index'))
@endcan
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Information</h3>
    </div>
    <div class="panel-body">
        {{ csrf_field() }}
        <div class="form-group">
            {!! Form::label('slug', 'Bí danh', ['class' => 'col-md-3 control-label']) !!}
            <div class="col-md-9">
                {!! Form::text('slug', @$menu->slug, ['class' => 'form-control', 'required']) !!}
            </div>
        </div>

        <div class="form-group form-actions">
            <div class="col-md-9 col-md-offset-3">
                {!! Form::button('<i class="fa fa-floppy-o" aria-hidden="true"></i> Lưu', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
            </div>
        </div>
    </div>
</div>