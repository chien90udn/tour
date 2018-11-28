@can('tours.groups.index')
    @section('back', route('admin.tours.groups.index'))
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
                    <input type="text" name="name" id="name" value="{{ old('name', @$group->name) }}" class="form-control" placeholder="Enter title here">
                    @if($errors->has('name'))
                        <div class="help-block text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <strong>Permalink:</strong> {{ url('/') }}/tours/<input type="text" name="name_link" value="{{ old('name_link', @$group->name_link?: 'sample-url') }}">
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-left">Snippet preview
                                <button class="btn btn-success btn-xs" type="button" id="showEditSearchEngineOptimized">
                                    <i class="fa fa-edit"></i>
                                </button>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div id="display-seo" class="seo_plugin">
                        <h4 class="seo_plugin_title" data="title">{{ @$group->seo_title ? $group->seo_title  : @$group->name }}</h4>
                            <div class="seo_plugin_url">
                                    {{ url('/') }}/tours/<strong data="url">{{ @$group->name_link ? $group->name_link  : 'sample-url' }}</strong>
                            </div>
                            <div class="seo_plugin_description" data="description">
                                    {{ @$group->seo_description ? $group->seo_description  : @strip_tags(str_limit($group->detail,320)) }}
                            </div>
                        </div>
                        <div id="form-seo" class="hidden">
                                <div class="form-group">
                                    {!! Form::label('title','SEO Title', ['class' => 'label-control col-md-3']) !!}
                                    <div class="col-md-9">
                                        {!! Form::text('seo_title', @$group->seo_title ? @$group->seo_title : null, ['class' => 'form-control', 'maxlength' => 70]) !!}
                                        <p class="help-block"><span data="count">0</span>/70</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('description', 'SEO Description', ['class' => 'label-control col-md-3']) !!}
                                    <div class="col-md-9">
                                        {!! Form::textarea('seo_description', @$group->seo_description ? $group->seo_description : null, ['class' => 'form-control', 'maxlength' => 320,'rows' => '2']) !!}
                                        <p class="help-block"><span data="count">0</span>/160</p>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                    <label for="tags">Tags</label>
                    <input name="tags" id="tags" class="form-control" value="{{ old('tags', @$group->tags)  }}" />
                    @if($errors->has('tags'))
                        <div class="help-block text-danger">{{ $errors->first('tags') }}</div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                    <label for="tags">Category Parent</label>
                    {{  Form::select('parent_id', $category, @$group->parent_id, ['class' => 'select2']) }}
                    @if($errors->has('parent_id'))
                        <div class="help-block text-danger">{{ $errors->first('route') }}</div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                    <label for="detail">Detail</label>
                    <textarea class="form-control editor" name="detail" id="" cols="30" rows="10" placeholder="Enter detail here">{{ old('detail', @$group->detail) }}</textarea>
                    @if($errors->has('detail'))
                        <div class="help-block text-danger">{{ $errors->first('detail') }}</div>
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
                        {!! Form::hidden('bg', @$group->bg, ['id' => 'bg']) !!}
                    </div>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->

    </div>
</div>

@push('script')
<script>
    'use strict';

    (function($) {
        $('#showEditSearchEngineOptimized').on('click', function(e) {
            e.preventDefault();
            $('#form-seo').removeClass('hidden');
            $('#display-seo').remove();
            $(this).remove();
        });
        $('[name="name"').keyup(function() {
            $('[data="title"]').html($(this).val().substr(0, 69));
            $('[name="seo_title"').val($(this).val().substr(0,69));
            $('[data="url"]').html(slugify($(this).val()));
            $('[name="slug"').val(slugify($(this).val()));
        });
        $('[name="description"').keyup(function() {
            $('[data="description"]').html($(this).val().substr(0,169));
            $('[name="seo_description"').val($(this).val().substr(0,169));
        });
        $('[name="slug"').keyup(function() {
            $('[data="url"]').html(slugify($(this).val()));
        });
        $('[name="seo_title"').keyup(function() {
            var target = $(this).next().find('[data=count]');
                target.text($(this).val().length);
                $('[name="slug"').val(slugify($(this).val()));
                $('[data="url"]').html(slugify($(this).val()));
        });
        $('[name="seo_description"').keyup(function() {
            var target = $(this).next().find('[data=count]');
            target.text($(this).val().length);
        });
    })(jQuery);
</script>
@endpush