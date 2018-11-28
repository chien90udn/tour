@can('tours.destinations.index')
    @section('back', route('admin.tours.tours.index'))
@endcan

<div class="row">
    @if ($errors->any())
    <div class="col-md-12">
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <div class="col-xs-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Information</h3>
            </div>
            <div class="panel-body">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Name</label>
                    <div class="row">
                        <div class="col-md-10">
                            <input type="text" name="name" id="name" value="{{ old('name', @$tour->name) }}" class="form-control" placeholder="Enter title here">
                            @if($errors->has('name'))
                                <div class="help-block text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-2">
                            <input type="hidden" id="totalDay" value="{{ @$tour->duration }}">
                            <select class="form-control" name="duration" id="duration" onchange="{{ @$tour->duration ? 'load_EditIti()' : 'load_iti()' }};">
                                @for($i = 1; $i < 41; $i++)
                                <option value="{{ $i }}" {{ @$tour->duration == $i ? 'selected' : '' }}> {{ $i }} days</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <strong>Permalink:</strong> {{ url('/') }}/tours/<input type="text" name="name_link" value="{{ old('name_link', @$tour->name_link?: 'sample-url') }}">
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
                        <h4 class="seo_plugin_title" data="title">{{ @$tour->seo_title ? $tour->seo_title  : @$tour->name }}</h4>
                            <div class="seo_plugin_url">
                                    {{ url('/') }}/tours/<strong data="url">{{ @$tour->name_link ? $tour->name_link  : 'sample-url' }}</strong>.html
                            </div>
                            <div class="seo_plugin_description" data="description">
                                    {{ @$tour->seo_description ? $tour->seo_description  : @$tour->description }}
                            </div>
                        </div>
                        <div id="form-seo" class="hidden">
                                <div class="form-group">
                                    {!! Form::label('title','SEO Title', ['class' => 'label-control col-md-3']) !!}
                                    <div class="col-md-9">
                                        {!! Form::text('seo_title', @$tour->seo_title ? @$tour->seo_title : null, ['class' => 'form-control', 'maxlength' => 70]) !!}
                                        <p class="help-block"><span data="count">0</span>/70</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('description', 'SEO Description', ['class' => 'label-control col-md-3']) !!}
                                    <div class="col-md-9">
                                        {!! Form::textarea('seo_description', @$tour->seo_description ? $tour->seo_description : null, ['class' => 'form-control', 'maxlength' => 160,'rows' => '2']) !!}
                                        <p class="help-block"><span data="count">0</span>/160</p>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                    <label for="tags">Keywords</label>
                    <input name="tags" id="tags" class="form-control" value="{{ old('tags', @$tour->tags)  }}" />
                    @if($errors->has('tags'))
                        <div class="help-block text-danger">{{ $errors->first('tags') }}</div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('route') ? ' has-error' : '' }}">
                    <label for="name">Destination</label>
                    {{--{{  Form::select('route[]', $destination, explode('->',@$tour->route), ['multiple' => true, 'class' => 'select2']) }}--}}
                    {{--@if($errors->has('route'))--}}
                        {{--<div class="help-block text-danger">{{ $errors->first('route') }}</div>--}}
                    {{--@endif--}}
                    <textarea name="route" id="route" rows="4" class="form-control">{{ old('name', @$tour->route) }}</textarea>
                    @if($errors->has('route'))
                        <div class="help-block text-danger">{{ $errors->first('route') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-1 control-label">Country:</label>
                        <div class="col-md-11">
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="countrys[]" value="Vietnam" id="vietnam" {{ @in_array("Vietnam",@$country) ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Vietnam
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="countrys[]" value="Cambodia" id="cambodia" {{ @in_array("Cambodia",@$country) ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Cambodia
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="countrys[]" value="Laos" id="laos" {{ @in_array("Laos",@$country) ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Laos
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="countrys[]" value="Myanmar" id="myanmar" {{ @in_array("Myanmar",@$country) ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Myanmar
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="countrys[]" value="Thailand" id="thailand" {{ @in_array("Thailand",@$country) ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Thailand
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <label class="col-md-1 control-label">Experiences:</label>
                        <div class="col-md-11">
                            @foreach($experiences as $key => $item)
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="{{ strtolower($item) }}" value="{{ $key }}" id="{{ $item }}" {{ @$experience[$key] == $key ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    {{ $item }}
                                </label>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>


                <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" rows="4" class="form-control editor">{{ old('name', @$tour->description) }}</textarea>
                    @if($errors->has('description'))
                        <div class="help-block text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>

                <div class="form-group">
                        <label for="video_link">Video link</label>
                    <input type="text" name="video_link" id="video_link" value="{{ old('video_link', @$tour->video_link) }}" class="form-control" placeholder="Enter video link here">
                    @if($errors->has('video_link'))
                        <div class="help-block text-danger">{{ $errors->first('video_link') }}</div>
                    @endif
                </div>


                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#itinerary" data-toggle="tab" aria-expanded="true">
                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                            <span class="hidden-xs">Itinerary</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#price" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Include & Exclude</span>
                        </a>
                    </li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="itinerary">
                        <div class="form-group {{ $errors->has('highlight') ? ' has-error' : '' }}">
                            <label for="highlight">HighLights</label>
                            <textarea name="highlight" id="highlight" rows="4" class="form-control simple_editor">{{ old('name', @$tour->highlight) }}</textarea>
                            @if($errors->has('highlight'))
                                <div class="help-block text-danger">{{ $errors->first('highlight') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane" id="price">

                        <div class="form-group {{ $errors->has('include') ? ' has-error' : '' }}">
                            <label for="include">Include</label>
                            <textarea name="include" id="include" rows="4" class="form-control simple_editor">{{ old('include', @$tour->include) }}</textarea>
                            @if($errors->has('include'))
                                <div class="help-block text-danger">{{ $errors->first('include') }}</div>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('exclude') ? ' has-error' : '' }}">
                            <label for="exclude">Exclude:</label>
                            <textarea name="exclude" id="exclude" rows="4" class="form-control simple_editor">{{ old('exclude', @$tour->exclude) }}</textarea>
                            @if($errors->has('exclude'))
                                <div class="help-block text-danger">{{ $errors->first('exclude') }}</div>
                            @endif
                        </div>

                    </div>
                </div>
                @if(isset($tour))
                @php
                    $arr_iti = explode("#",$tour["detail"]);
                @endphp

                @for($i=1;$i<=intval(@$tour->duration);$i++)
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#day{{ $i }}" data-toggle="tab" aria-expanded="true">
                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                            <span class="hidden-xs">Day {{ $i }}</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    @php $arr_each = explode("|",@$arr_iti[$i-1]); @endphp
                    <div class="tab-pane active" id="day{{ $i }}">
                        <div class="form-group {{ $errors->has('trans[]') ? ' has-error' : '' }}">
                            <label for="trans[]">Trans</label>
                            <select class="form-control" name="trans[]" id="trans[]">
                                <option value="1" {{ @$arr_each[5] == 1 ? 'selected' : '' }}>Fly</option>
                                <option value="2" {{ @$arr_each[5] == 2 ? 'selected' : '' }}>Car</option>
                                <option value="3" {{ @$arr_each[5] == 3 ? 'selected' : '' }}>Train</option>
                                <option value="4" {{ @$arr_each[5] == 4 ? 'selected' : '' }}>Cruise</option>
                                <option value="5" {{ @$arr_each[5] == 5 ? 'selected' : '' }}>Boating</option>
                                <option value="6" {{ @$arr_each[5] == 6 ? 'selected' : '' }}>Walking</option>
                                <option value="7" {{ @$arr_each[5] == 7 ? 'selected' : '' }}>Biking</option>
                            </select>
                            @if($errors->has('trans[]'))
                                <div class="help-block text-danger">{{ $errors->first('trans[]') }}</div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('place[]') ? ' has-error' : '' }}">
                            <label for="place[]">Place & Transport</label>
                            <input type="text" name="place[]" id="place[]" value="{{ old('place[]', @$arr_each[0]) }}" class="form-control" placeholder="Enter Place & Transport here">
                            @if($errors->has('place[]'))
                                <div class="help-block text-danger">{{ $errors->first('place[]') }}</div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('acti[]') ? ' has-error' : '' }}">
                            <label for="acti[]">Activities</label>
                            <input type="text" name="acti[]" id="acti[]" value="{{ old('acti[]', @$arr_each[1]) }}" class="form-control" placeholder="Enter Activities here">
                            @if($errors->has('acti[]'))
                                <div class="help-block text-danger">{{ $errors->first('acti[]') }}</div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('inciti[]') ? ' has-error' : '' }}">
                            <label for="inciti[]">Inclussion</label>
                            <input type="text" name="inciti[]" id="inciti[]" value="{{ old('inciti[]', @$arr_each[6]) }}" class="form-control" placeholder="Enter Inclussion here">
                            @if($errors->has('inciti[]'))
                                <div class="help-block text-danger">{{ $errors->first('inciti[]') }}</div>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('meal[]') ? ' has-error' : '' }}">
                            <label for="meal[]">Meal</label>
                            <input type="text" name="meal[]" id="meal[]" value="{{ old('meal[]', @$arr_each[2]) }}" class="form-control" placeholder="Enter Meal here">
                            @if($errors->has('meal[]'))
                                <div class="help-block text-danger">{{ $errors->first('meal[]') }}</div>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('detail_tour[]') ? ' has-error' : '' }}">
                            <label for="detail_tour[]">Detailed Itinerary</label>
                            <textarea name="detail_tour[]" id="detail_tour[]" rows="4" class="form-control simple_editor">{{ old('detail_tour[]', @$arr_each[3]) }}</textarea>
                            @if($errors->has('detail_tour[]'))
                                <div class="help-block text-danger">{{ $errors->first('detail_tour[]') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                @endfor
                @else
                <div id="dayFirst">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#day1" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                <span class="hidden-xs">Day 1</span>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="day1">
                            <div class="form-group {{ $errors->has('trans[]') ? ' has-error' : '' }}">
                                <label for="trans[]">Trans</label>
                                <select class="form-control" name="trans[]" id="trans[]">
                                    <option value="1" {{ @$arr_each[5] == 1 ? 'selected' : '' }}>Fly</option>
                                    <option value="2" {{ @$arr_each[5] == 2 ? 'selected' : '' }}>Car</option>
                                    <option value="3" {{ @$arr_each[5] == 3 ? 'selected' : '' }}>Train</option>
                                    <option value="4" {{ @$arr_each[5] == 4 ? 'selected' : '' }}>Cruise</option>
                                    <option value="5" {{ @$arr_each[5] == 5 ? 'selected' : '' }}>Boating</option>
                                    <option value="6" {{ @$arr_each[5] == 6 ? 'selected' : '' }}>Walking</option>
                                    <option value="7" {{ @$arr_each[5] == 7 ? 'selected' : '' }}>Biking</option>
                                </select>
                                @if($errors->has('trans[]'))
                                    <div class="help-block text-danger">{{ $errors->first('trans[]') }}</div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('place[]') ? ' has-error' : '' }}">
                                <label for="place[]">Place & Transport</label>
                                <input type="text" name="place[]" id="place[]" value="{{ old('place[]', @$arr_each[0]) }}" class="form-control" placeholder="Enter Place & Transport here">
                                @if($errors->has('place[]'))
                                    <div class="help-block text-danger">{{ $errors->first('place[]') }}</div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('acti[]') ? ' has-error' : '' }}">
                                <label for="acti[]">Activities</label>
                                <input type="text" name="acti[]" id="acti[]" value="{{ old('acti[]', @$arr_each[1]) }}" class="form-control" placeholder="Enter Activities here">
                                @if($errors->has('acti[]'))
                                    <div class="help-block text-danger">{{ $errors->first('acti[]') }}</div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('inciti[]') ? ' has-error' : '' }}">
                                <label for="inciti[]">Inclussion</label>
                                <input type="text" name="inciti[]" id="inciti[]" value="{{ old('inciti[]', @$arr_each[6]) }}" class="form-control" placeholder="Enter Inclussion here">
                                @if($errors->has('inciti[]'))
                                    <div class="help-block text-danger">{{ $errors->first('inciti[]') }}</div>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('meal[]') ? ' has-error' : '' }}">
                                <label for="meal[]">Meal</label>
                                <input type="text" name="meal[]" id="meal[]" value="{{ old('meal[]', @$arr_each[2]) }}" class="form-control" placeholder="Enter Meal here">
                                @if($errors->has('meal[]'))
                                    <div class="help-block text-danger">{{ $errors->first('meal[]') }}</div>
                                @endif
                            </div>
                            <div class="form-group {{ $errors->has('detail_tour[]') ? ' has-error' : '' }}">
                                <label for="detail_tour[]">Detailed Itinerary</label>
                                <textarea name="detail_tour[]" id="detail_tour[]" rows="4" class="form-control">{{ old('detail_tour[]', @$arr_each[3]) }}</textarea>
                                @if($errors->has('detail_tour[]'))
                                    <div class="help-block text-danger">{{ $errors->first('detail_tour[]') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                <div id="day-groups"></div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-left">Album
                            <button class="btn btn-success btn-xs" type="button" id="add-new-image">
                                <i class="fa fa-plus"></i>
                            </button>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-bordered row draggable-blocks ui-sortable"
                             id="images">
                            @if(@$tour->photo_e) @foreach(explode('|',@$tour->photo_e) as $image)
                                <div class="image-item col-md-2 col-sm-2 col-xs-2">
                                    <img src="{{ $image }}" alt="">
                                    <button class="btn btn-danger btn-xs delete-image" type="button">
                                        <i class="fa fa-trash-o"></i> <span class="sr-only">delete</span>
                                    </button>
                                    <input type="hidden" name="images[]" value="{{ $image }}">
                                </div>
                            @endforeach @endif
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title text-left">Review</h3>
                    </div>
                    <div class="panel-body">
                        @if(@$tour->review)
                        @php @$rev_data = explode("#", $tour->review); @endphp
                        <input type="hidden" id="totalReview" value="{{count($rev_data)}}">
                        @for($j=0;$j<count($rev_data);$j++)
                        @php $review_data = explode("|", $rev_data[$j]); @endphp
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="name_rev[]">Name</label>
                                    <input type="text" name="review_name[]" id="review_name[]" value="{{ old('review_name[]', @$review_data[0]) }}" class="form-control" placeholder="Enter name here">
                                    @if($errors->has('review_name[]'))
                                        <div class="help-block text-danger">{{ $errors->first('review_name[]') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="country[]">&ensp;</label>
                                    {!! Form::select('review_country[]', $country_review, @$review_data[1], ['class' => 'form-control']) !!}
                                    @if($errors->has('review_country[]'))
                                        <div class="help-block text-danger">{{ $errors->first('review_country[]') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="review_title[]">Review Title</label>
                                    <input type="text" name="review_title[]" id="review_title[]" value="{{ old('review_title[]', @$review_data[2]) }}" class="form-control" placeholder="Enter review title here">
                                    @if($errors->has('review_title[]'))
                                        <div class="help-block text-danger">{{ $errors->first('review_title[]') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="grade">Grade</label>
                                    {!! Form::select('review_grade[]', ['2' => '2 stars','2.5' => '2 stars+','3' => '3 stars','3.5' => '3 stars+','4' => '4 stars','4.5' => '4 stars+','5' => '5 stars','5.5' => '5 stars+','6' => '6 stars','6.5' => '6 stars+','7' => '7 stars'], @$review_data[3] ? $review_data[3] : '5' , ['class' => 'form-control']) !!}
                                    @if($errors->has('review_grade[]'))
                                        <div class="help-block text-danger">{{ $errors->first('review_grade[]') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group {{ $errors->has('comment[]') ? ' has-error' : '' }}">
                                        <label for="comment[]">Comment</label>
                                        <textarea name="comment[]" id="comment[]" rows="3" class="form-control simple_editor">{{ old('name', @$review_data[4]) }}</textarea>
                                        @if($errors->has('comment[]'))
                                            <div class="help-block text-danger">{{ $errors->first('comment[]') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="comment[]">Avatar</label>
                                        <div class="choose-thumbnail">
                                            {!! Form::hidden('review_avatar[]', @$review_data[5], ['id' => 'review_avatar'.$j]) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                        @else
                        <input type="hidden" id="totalReview" value="0">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="name_rev[]">Name</label>
                                    <input type="text" name="review_name[]" id="review_name[]" value="{{ old('review_name[]') }}" class="form-control" placeholder="Enter name here">
                                    @if($errors->has('review_name[]'))
                                        <div class="help-block text-danger">{{ $errors->first('review_name[]') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="country[]">&ensp;</label>
                                    {!! Form::select('review_country[]', $country_review, null, ['class' => 'form-control']) !!}
                                    @if($errors->has('review_country[]'))
                                        <div class="help-block text-danger">{{ $errors->first('review_country[]') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="review_title[]">Review Title</label>
                                    <input type="text" name="review_title[]" id="review_title[]" value="{{ old('review_title[]') }}" class="form-control" placeholder="Enter review title here">
                                    @if($errors->has('review_title[]'))
                                        <div class="help-block text-danger">{{ $errors->first('review_title[]') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="grade">Grade</label>
                                    {!! Form::select('review_grade[]', ['2' => '2 stars','2.5' => '2 stars+','3' => '3 stars','3.5' => '3 stars+','4' => '4 stars','4.5' => '4 stars+','5' => '5 stars','5.5' => '5 stars+','6' => '6 stars','6.5' => '6 stars+','7' => '7 stars'], '5', ['class' => 'form-control']) !!}
                                    @if($errors->has('review_grade[]'))
                                        <div class="help-block text-danger">{{ $errors->first('review_grade[]') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="form-group {{ $errors->has('comment[]') ? ' has-error' : '' }}">
                                        <label for="comment[]">Comment</label>
                                        <textarea name="comment[]" id="comment[]" rows="3" class="form-control simple_editor">{{ old('name', @$review_data[4]) }}</textarea>
                                        @if($errors->has('comment[]'))
                                            <div class="help-block text-danger">{{ $errors->first('comment[]') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="comment[]">Avatar</label>
                                        <div class="choose-thumbnail">
                                            {!! Form::hidden('review_avatar[]', @$review_data[5], ['id' => 'review_avatar']) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div id="review-group"></div>
                        <button type="button" class="btn btn-success btn-sm m-b-5" onclick="addReview()">Add new Review</button>
                    </div>
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
                    <label class="cr-styled">
                    <input type="checkbox" name="or_home" value="1" {{ @$tour->or_home ? 'checked' : '' }}>
                        <i class="fa"></i> 
                        Tour is highlight
                    </label>
                </div>
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
            <div class="panel-heading">
                <h3 class="panel-title">Option</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" min="0" id="price" value="{{ old('price', @$tour->price ?: 0) }}" class="form-control" >
                    @if($errors->has('price'))
                        <div class="help-block text-danger">{{ $errors->first('price') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="text" name="discount" id="discount" value="{{ old('discount', @$tour->discount?: 0) }}" class="form-control" placeholder="Enter discount here">
                    @if($errors->has('discount'))
                        <div class="help-block text-danger">{{ $errors->first('discount') }}</div>
                    @endif
                </div>
                {{-- <div class="form-group">
                    <label for="save">Save</label>
                    <input type="text" name="save" id="save" value="{{ old('save', @$tour->save?: 0) }}" class="form-control" placeholder="Enter save here">
                    @if($errors->has('save'))
                        <div class="help-block text-danger">{{ $errors->first('save') }}</div>
                    @endif
                </div> --}}
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Choose Tour Groups</h3>
            </div>
            <div class="panel-body">
                <div class="form-group{{ $errors->has('groups') ? ' has-error' : '' }}">
                    {{  Form::select('groups[]', $groups, @$tour ? $tour->groups->map->id->toArray() : 'Null', ['multiple' => true, 'class' => '', 'id' => 'my_multi_select']) }}
                    @if($errors->has('groups'))
                        <div class="help-block text-danger">{{ $errors->first('groups') }}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Photo</h3></div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="choose-thumbnail">
                        {!! Form::hidden('photo', @$tour->photo, ['id' => 'photo']) !!}
                    </div>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->

    </div>
</div>

@push('header')
<style>
    .seo_plugin {
        padding: 10px;
    }

    .seo_plugin_title {
        min-height: 21px;
        display: block;
        font-size: 18px;
        color: #1a0dab;
        line-height: 21px;
        margin-bottom: 2px;
    }



    .seo_plugin_url {
        display: block;
        word-wrap: break-word;
        color: #006621;
        font-size: 13px;
        line-height: 16px;
        margin-bottom: 2px;
    }

    .seo_plugin_description {
        display: block;
        color: #545454;
        line-height: 18px;
        font-size: 13px;
    }
</style>
@endpush

@push('footer')
<div class="template" style="display: none;">
    <div id="attribute-group-template">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#day__KEY__" data-toggle="tab" aria-expanded="true">
                    <span class="visible-xs"><i class="fa fa-home"></i></span>
                    <span class="hidden-xs">Day __KEY__</span>
                </a>
            </li>
        </ul>

        <div class="tab-content">
                <div class="tab-pane active" id="day__KEY__">
                    <div class="form-group {{ $errors->has('trans[]') ? ' has-error' : '' }}">
                        <label for="trans[]">Trans</label>
                        <select class="form-control" name="trans[]" id="trans[]">
                            <option value="1">Fly</option>
                            <option value="2">Car</option>
                            <option value="3">Train</option>
                            <option value="4">Cruise</option>
                            <option value="5">Boating</option>
                            <option value="6">Walking</option>
                            <option value="7">Biking</option>
                        </select>
                        @if($errors->has('trans[]'))
                            <div class="help-block text-danger">{{ $errors->first('trans[]') }}</div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('place[]') ? ' has-error' : '' }}">
                        <label for="place[]">Place & Transport</label>
                        <input type="text" name="place[]" id="place[]" value="{{ old('place[]', null) }}" class="form-control" placeholder="Enter Place & Transport here">
                        @if($errors->has('place[]'))
                            <div class="help-block text-danger">{{ $errors->first('place[]') }}</div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('acti[]') ? ' has-error' : '' }}">
                        <label for="acti[]">Activities</label>
                        <input type="text" name="acti[]" id="acti[]" value="{{ old('acti[]', null) }}" class="form-control" placeholder="Enter Activities here">
                        @if($errors->has('acti[]'))
                            <div class="help-block text-danger">{{ $errors->first('acti[]') }}</div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('inciti[]') ? ' has-error' : '' }}">
                        <label for="inciti[]">Inclussion</label>
                        <input type="text" name="inciti[]" id="inciti[]" value="{{ old('inciti[]', null) }}" class="form-control" placeholder="Enter Inclussion here">
                        @if($errors->has('inciti[]'))
                            <div class="help-block text-danger">{{ $errors->first('inciti[]') }}</div>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('meal[]') ? ' has-error' : '' }}">
                        <label for="meal[]">Meal</label>
                        <input type="text" name="meal[]" id="meal[]" value="{{ old('meal[]', null) }}" class="form-control" placeholder="Enter Meal here">
                        @if($errors->has('meal[]'))
                            <div class="help-block text-danger">{{ $errors->first('meal[]') }}</div>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('detail_tour[]') ? ' has-error' : '' }}">
                        <label for="detail_tour[]">Detailed Itinerary</label>
                        <textarea name="detail_tour[]" id="detail_tour[]" rows="4" class="form-control">{{ old('detail_tour[]', @$arr_each[3]) }}</textarea>
                        @if($errors->has('detail_tour[]'))
                            <div class="help-block text-danger">{{ $errors->first('detail_tour[]') }}</div>
                        @endif
                    </div>
                </div>
        </div>

    </div>

    <div id="review-group-template">
        <hr>
        <div class="form-group">
            <div class="row">
                <div class="col-md-8">
                    <label for="name_rev[]">Name</label>
                    <input type="text" name="review_name[]" id="review_name[]" value="{{ old('review_name[]') }}" class="form-control" placeholder="Enter name here">
                    @if($errors->has('review_name[]'))
                        <div class="help-block text-danger">{{ $errors->first('review_name[]') }}</div>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="country[]">&ensp;</label>
                    {!! Form::select('review_country[]', $country_review, null, ['class' => 'form-control']) !!}
                    @if($errors->has('review_country[]'))
                        <div class="help-block text-danger">{{ $errors->first('review_country[]') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label for="review_title[]">Review Title</label>
                    <input type="text" name="review_title[]" id="review_title[]" value="{{ old('review_title[]') }}" class="form-control" placeholder="Enter review title here">
                    @if($errors->has('review_title[]'))
                        <div class="help-block text-danger">{{ $errors->first('review_title[]') }}</div>
                    @endif
                </div>
                <div class="col-md-6">
                    <label for="grade">Grade</label>
                    {!! Form::select('review_grade[]', ['2' => '2 stars','2.5' => '2 stars+','3' => '3 stars','3.5' => '3 stars+','4' => '4 stars','4.5' => '4 stars+','5' => '5 stars','5.5' => '5 stars+','6' => '6 stars','6.5' => '6 stars+','7' => '7 stars'], '5', ['class' => 'form-control']) !!}
                    @if($errors->has('review_grade[]'))
                        <div class="help-block text-danger">{{ $errors->first('review_grade[]') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group {{ $errors->has('comment[]') ? ' has-error' : '' }}">
                            <label for="comment[]">Comment</label>
                            <textarea name="comment[]" id="comment[]" rows="3" class="form-control simple_editor">{{ old('name') }}</textarea>
                            @if($errors->has('comment[]'))
                                <div class="help-block text-danger">{{ $errors->first('comment[]') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="comment[]">Avatar</label>
                            <div class="choose-thumbnail">
                                {!! Form::hidden('review_avatar[]', null, ['id' => 'review_avatar__KEY__']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endpush
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