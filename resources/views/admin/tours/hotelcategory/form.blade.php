@can('tours.cruisescategory.index')
    @section('back', route('admin.tours.hotelcategory.index'))
@endcan
<div class="row">
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Information</h3>
            </div>
            <div class="panel-body">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', @$hotelcategory->name) }}" class="form-control" placeholder="Enter title here">
                    @if($errors->has('name'))
                        <div class="help-block text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                    <label for="tags">Tags</label>
                    <input name="tags" id="tags" class="form-control" value="{{ old('tags', @$hotelcategory->tags)  }}" />
                    @if($errors->has('tags'))
                        <div class="help-block text-danger">{{ $errors->first('tags') }}</div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                    <label for="tags">Category Parent</label>
                    {{  Form::select('parent_id', $category, @$hotelcategory->parent_id, ['class' => 'select2']) }}
                    @if($errors->has('parent_id'))
                    <div class="help-block text-danger">{{ $errors->first('route') }}</div>
                    @endif
                </div>

            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Publish</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-fw fa-save"></i> Publish
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Photo</h3></div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="choose-thumbnail">
                        {!! Form::hidden('bg', @$hotelcategory->bg, ['id' => 'bg']) !!}
                    </div>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->

    </div>
</div>