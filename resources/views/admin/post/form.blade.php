@section('back', route('admin.post.index'))
{{ csrf_field() }}
<div class="row">
    <!-- Basic example -->
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Thông tin bài viết</h3></div>
            <div class="panel-body">

                 <div class="form-group">
                    <label for="name">Tiêu đề</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ old('name', @$post->name) }}" placeholder="Nhập tên danh mục">
                    @if($errors->has('name'))
                        <div class="help-block text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="description">Mô tả</label>
                    <textarea class="form-control" rows="5" name="description" id="description" name="description">{{ old('description', @$post->description) }}</textarea>
                    @if($errors->has('description'))
                        <div class="help-block text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                    <label for="tags">Tags</label>
                    <input name="tags" id="tags" class="form-control" value="{{ old('tags', @$post->tags)  }}" />
                    @if($errors->has('tags'))
                        <div class="help-block text-danger">{{ $errors->first('tags') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="detail">Nội dung bài viết</label>
                    <textarea class="form-control editor" rows="8" name="detail" id="detail" name="detail">{{ old('detail', $post->detail) }}</textarea>
                    @if($errors->has('detail'))
                        <div class="help-block text-danger">{{ $errors->first('detail') }}</div>
                    @endif
                </div>


            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
    <div class="col-md-4">
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
            <div class="panel-heading"><h3 class="panel-title">Danh mục</h3></div>
            <div class="panel-body">
                <div class="form-group">
                    {!! Form::select('category[]', (
                    new \App\PostCategory())->getParentForSelection(),
                    @$post->cat_id,
                    ['class' => 'col-sm-12 select2', 'multiple' => false, 'required']
                ) !!}
                    @if($errors->has('category[]'))
                        <div class="help-block text-danger">{{ $errors->first('category[]') }}</div>
                    @endif
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->

        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Ảnh đại diện</h3></div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="choose-thumbnail">
                        {!! Form::hidden('photo', @$post->photo, ['id' => 'thumbnail']) !!}
                    </div>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->


    </div> <!-- col-->
</div>