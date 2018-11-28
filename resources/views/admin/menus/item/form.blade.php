

<div class="tab-content">

        <div class="tab-pane active">
            <div class="form-group">
                {!! Form::label('title', 'Tiêu đề', ['class' => 'label-control col-md-4']) !!}
                <div class="col-md-8">
                    {!! Form::text('name', @$item->name, ['class' => 'form-control', 'required']) !!}
                </div>
            </div>
        </div>
</div>

<div class="form-group">
    {!! Form::label('url', 'Đường dẫn menu', ['class' => 'label-control col-md-4']) !!}
    <div class="col-md-8">
        <div class="input-group">
            {!! Form::text('url', @$item->url, ['class' => 'form-control', 'required']) !!}
            <span class="input-group-btn">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#search-links"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </div>
</div>

<div class="tab-content">
    <div class="tab-pane active">
        <div class="form-group">
            {!! Form::label('thumbnail', 'Ảnh', ['class' => 'label-control col-md-4']) !!}
            <div class="col-md-8">
                <div class="choose-thumbnail">
                    {!! Form::hidden('thumbnail', @$item->thumbnail, ['id' => 'thumbnail']) !!}
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.menus.item.dropdown_menu')

<div class="form-group form-actions">
    <div class="col-md-8 col-md-offset-4">
        {!! Form::button('Đồng ý', ['class' => 'btn btn-primary', 'type' => 'submit']) !!}
        {!! Form::button('Hủy', ['class' => 'btn btn-default', 'type' => 'button', 'id' => 'cancel_button']) !!}
    </div>
</div>
