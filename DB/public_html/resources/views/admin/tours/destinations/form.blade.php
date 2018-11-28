@can('tours.destinations.index')
    @section('back', route('admin.tours.destinations.index'))
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
                    <input type="text" name="name" id="name" value="{{ old('name', @$destination->name) }}" class="form-control" placeholder="Enter title here">
                    @if($errors->has('name'))
                        <div class="help-block text-danger">{{ $errors->first('name') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <div class="row">
                        <label class="col-md-1 control-label">Country:</label>
                        <div class="col-md-11">
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="country" value="Vietnam" id="vietnam" {{ @$destination->country == "Vietnam" ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Vietnam
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="country" value="Cambodia" id="cambodia" {{ @$destination->country == "Cambodia" ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Cambodia
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="country" value="Laos" id="laos" {{ @$destination->country == "Laos" ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Laos
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="country" value="Myanmar" id="myanmar" {{ @$destination->country == "Myanmar" ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Myanmar
                                </label>
                            </div>
                            <div class="checkbox-inline">
                                <label class="cr-styled">
                                    <input type="checkbox" name="country" value="Thailand" id="thailand" {{ @$destination->country == "Thailand" ? 'checked' : '' }}>
                                    <i class="fa"></i>
                                    Thailand
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                    $months = explode(',',@$destination->months);
                    $months = array_combine(range(1, count($months)), $months);
                @endphp

                <div class="form-group{{ $errors->has('months') ? ' has-error' : '' }}">
                    <label for="months">Months</label>
                    {{  Form::select('months[]', get_months(), @$months, ['multiple' => true, 'class' => 'select2']) }}
                    @if($errors->has('months'))
                        <div class="help-block text-danger">{{ $errors->first('months') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                @php
                                    $month = explode(',',@$destination->months_good);
                                    $month = array_combine(range(1, count($month)), $month);
                                @endphp
                                @for($i = 1; $i < 13; $i++)
                                    <div class="col-md-2">
                                        <label for="months_{{ $i }}">Months {{ $i }}</label>
                                        <select name="months_{{ $i }}" class="form-control" id="months_{{ $i }}">
                                            <option value="0" {{ @$month[$i] == 0 ? 'selected' : '' }}>Off</option>
                                            <option value="1" {{ @$month[$i] == 1 ? 'selected' : '' }}>Great</option>
                                            <option value="2" {{ @$month[$i] == 2 ? 'selected' : '' }}>Most</option>
                                        </select>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('desc') ? ' has-error' : '' }}">
                    <label for="desc">Description</label>
                    <textarea name="desc" id="desc" rows="4" class="form-control">{{ old('name', @$destination->desc) }}</textarea>
                    @if($errors->has('desc'))
                        <div class="help-block text-danger">{{ $errors->first('desc') }}</div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('fact') ? ' has-error' : '' }}">
                    <label for="fact">Fact</label>
                    <textarea name="fact" id="fact" rows="4" class="form-control simple_editor">{{ old('name', @$destination->fact) }}</textarea>
                    @if($errors->has('fact'))
                        <div class="help-block text-danger">{{ $errors->first('fact') }}</div>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('detail') ? ' has-error' : '' }}">
                    <label for="detail">Detail</label>
                    <textarea class="form-control editor" name="detail" id="" cols="30" rows="10" placeholder="Enter detail here">{{ old('detail', @$destination->detail) }}</textarea>
                    @if($errors->has('detail'))
                        <div class="help-block text-danger">{{ $errors->first('detail') }}</div>
                    @endif
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('gx') ? ' has-error' : '' }}">
                            <label for="gx">Latitude</label>
                            <input type="text" name="gx" id="gx" value="{{ old('gx', @$destination->gx) }}" class="form-control" placeholder="Enter title here">
                            @if($errors->has('gx'))
                                <div class="help-block text-danger">{{ $errors->first('gx') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('gy') ? ' has-error' : '' }}">
                            <label for="gy">Longitude</label>
                            <input type="text" name="gy" id="gy" value="{{ old('gy', @$destination->gy) }}" class="form-control" placeholder="Enter title here">
                            @if($errors->has('gy'))
                                <div class="help-block text-danger">{{ $errors->first('gy') }}</div>
                            @endif
                        </div>
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
                        {!! Form::hidden('photo', @$destination->photo, ['id' => 'photo']) !!}
                    </div>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->

    </div>
</div>