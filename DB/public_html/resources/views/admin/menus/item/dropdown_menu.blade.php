<div class="form-group">
    {!! Form::label('parent_id', 'Menu gốc', ['class' => 'label-control col-md-4']) !!}
    <div class="col-md-8">
        {!! Form::select('parent_id', $items, $selected, ['class' => 'form-control', 'required']) !!}
    </div>
</div>
