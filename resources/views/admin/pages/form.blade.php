@can('pages.index')
    @section('back', route('admin.pages.index'))
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
                    <label for="name">Page Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $page->name) }}" class="form-control" placeholder="Enter title here">
                    @if($errors->has('name'))
                        <div class="help-block text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <strong>Permalink:</strong> {{ url('/') }}/pages/<input type="text" name="name_link" value="{{ old('name_link', @$page->name_link?: 'sample-url') }}">
                    
                </div>

                <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                    <label for="content">Detail</label>
                    <textarea class="form-control editor" name="content" id="" cols="30" rows="10" placeholder="Enter content here">{{ old('content', $page->content) }}</textarea>
                    @if($errors->has('content'))
                        <div class="help-block text-danger">{{ $errors->first('content') }}</div>
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
    </div>
</div>