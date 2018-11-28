@can('tours.hotels.index')
    @section('back', route('admin.tours.hotels.index'))
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
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Hotel Name</label>
                            <input type="text" name="name" id="name" value="{{ old('name', @$hotel->name) }}" class="form-control" placeholder="Enter hotels name here">
                            @if($errors->has('name'))
                                <div class="help-block text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="number_hotel">Number Room</label>
                            <input type="text" name="number_hotel" id="number_hotel" value="{{ old('number_hotel', @$hotel->number_hotel) }}" class="form-control" placeholder="Enter number room here">
                            @if($errors->has('name'))
                                <div class="help-block text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="type_hotel"> Hotel Type</label>
                            {!! Form::select('type_hotel', ['0' => 'Please choose hotel type', '1' => 'City Hotel', '2' => 'Boutique Hotel', '3' => 'Beach Resort', '4' => 'Resort'], @$hotel->type_hotel, ['class' => 'form-control']) !!}
                        </div>
                    </div>

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
                        <h4 class="seo_plugin_title" data="title">{{ @$hotel->seo_title ? $hotel->seo_title  : @$hotel->name }}</h4>
                            <div class="seo_plugin_url">
                                    {{ url('/') }}/hotel/<strong data="url">{{ @$hotel->name_link ? $hotel->name_link  : 'sample-url' }}</strong>.html
                            </div>
                            <div class="seo_plugin_description" data="description">
                                    {!! @$hotel->seo_description ? $hotel->seo_description  : @$hotel->description !!}
                            </div>
                        </div>
                        <div id="form-seo" class="hidden">
                                <div class="form-group">
                                    {!! Form::label('title','SEO Title', ['class' => 'label-control col-md-3']) !!}
                                    <div class="col-md-9">
                                        {!! Form::text('seo_title', @$hotel->seo_title ? @$hotel->seo_title : $hotel->name, ['class' => 'form-control', 'maxlength' => 70]) !!}
                                        <p class="help-block"><span data="count">0</span>/70</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {!! Form::label('description', 'SEO Description', ['class' => 'label-control col-md-3']) !!}
                                    <div class="col-md-9">
                                        {!! Form::textarea('seo_description', @$hotel->seo_description ? $hotel->seo_description : strip_tags($hotel->description), ['class' => 'form-control', 'maxlength' => 160,'rows' => '2']) !!}
                                        <p class="help-block"><span data="count">0</span>/160</p>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('route') ? ' has-error' : '' }}">
                    <label for="location">Destination</label>
                    {{  Form::select('location', $destination, @$hotel->location, ['class' => 'select2']) }}
                    @if($errors->has('location'))
                        <div class="help-block text-danger">{{ $errors->first('location') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" value="{{ old('address', @$hotel->address) }}" class="form-control" placeholder="Enter address here">
                    @if($errors->has('address'))
                        <div class="help-block text-danger">{{ $errors->first('address') }}</div>
                    @endif
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="grade">Grade</label>
                            {!! Form::select('grade', ['2' => '2 stars','2.5' => '2 stars+','3' => '3 stars','3.5' => '3 stars+','4' => '4 stars','4.5' => '4 stars+','5' => '5 stars','5.5' => '5 stars+','6' => '6 stars','6.5' => '6 stars+','7' => '7 stars'], @$hotel->grade, ['class' => 'form-control']) !!}
                            @if($errors->has('grade'))
                                <div class="help-block text-danger">{{ $errors->first('grade') }}</div>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="our_grade">Our Grade</label>
                            {!! Form::select('our_grade', ['2' => '2 stars','2.5' => '2 stars+','3' => '3 stars','3.5' => '3 stars+','4' => '4 stars','4.5' => '4 stars+','5' => '5 stars','5.5' => '5 stars+','6' => '6 stars','6.5' => '6 stars+','7' => '7 stars'], @$hotel->our_grade, ['class' => 'form-control']) !!}
                            @if($errors->has('our_grade'))
                                <div class="help-block text-danger">{{ $errors->first('our_grade') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" value="{{ old('phone', @$hotel->phone) }}" class="form-control" placeholder="Enter phone here">
                            @if($errors->has('phone'))
                                <div class="help-block text-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" value="{{ old('email', @$hotel->email) }}" class="form-control" placeholder="Enter email here">
                            @if($errors->has('email'))
                                <div class="help-block text-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="website">Website</label>
                            <input type="text" name="website" id="website" value="{{ old('website', @$hotel->website) }}" class="form-control" placeholder="Enter website here">
                            @if($errors->has('website'))
                                <div class="help-block text-danger">{{ $errors->first('website') }}</div>
                            @endif
                        </div>
                        <div class="col-md-3">
                            <label for="skyper">Skype</label>
                            <input type="text" name="skyper" id="skyper" value="{{ old('skyper', @$hotel->skyper) }}" class="form-control" placeholder="Enter skype here">
                            @if($errors->has('skyper'))
                                <div class="help-block text-danger">{{ $errors->first('skyper') }}</div>
                            @endif
                        </div>
                    </div>
                </div>


                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#oveview" data-toggle="tab" aria-expanded="true">
                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                            <span class="hidden-xs">Overview</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#facilities" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Facilities</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#policy" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Policy</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#dining" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Dining</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#room" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Room</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#review" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Review</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#price" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Map</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#viewpoit" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Points+-</span>
                        </a>
                    </li>
                </ul>


                <div class="tab-content">
                    <div class="tab-pane active" id="oveview">
                        <div class="form-group {{ $errors->has('oveview') ? ' has-error' : '' }}">
                            <textarea name="oveview" id="oveview" rows="4" class="form-control editor">{{ old('name', @$hotel->detail) }}</textarea>
                            @if($errors->has('oveview'))
                                <div class="help-block text-danger">{{ $errors->first('oveview') }}</div>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('point_of_view') ? ' has-error' : '' }}">
                            <label for="point_of_view">Point of view</label>
                            <textarea name="point_of_view" id="point_of_view" rows="4" class="form-control simple_editor">{{ old('name', @$hotel->point_of_view) }}</textarea>
                            @if($errors->has('point_of_view'))
                                <div class="help-block text-danger">{{ $errors->first('point_of_view') }}</div>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label for="tags">Tags</label>
                            <input name="tags" id="tags" class="form-control" value="{{ old('tags', @$hotel->tags)  }}" />
                            @if($errors->has('tags'))
                                <div class="help-block text-danger">{{ $errors->first('tags') }}</div>
                            @endif
                        </div>

                        <label class="cr-styled">
                            <input type="checkbox" name="type" value="1" id="type">
                            <i class="fa"></i>
                            Is Highlight Hotel
                        </label>
                    </div>

                    <div class="tab-pane" id="facilities">

                        <div class="form-group{{ $errors->has('groups') ? ' has-error' : '' }}">
                            <label class="control-label">Highlight Facilities:</label>
                            {{  Form::select('fac_high[]', ["Free Wifi" => "Free Wifi","Private Beach" => "Private Beach","Fitness Center" => "Fitness Center","Outdoor Pool" => "Outdoor Pool","Massage" => "Massage","Breakfast inc." => "Breakfast inc.",], explode(',',@$hotel->fac_high), ['multiple' => true, 'class' => 'select2']) }}
                            @if($errors->has('fac_high'))
                                <div class="help-block text-danger">{{ $errors->first('fac_high') }}</div>
                            @endif
                        </div>


                        <?php
                            if(isset($hotel)){
                                $arr_fac = explode("#",$hotel["facilities"]);
                                if(count($arr_fac) > 1) {
                                    $arr_general = explode(",",$arr_fac[0]);
                                    $arr_sport = explode(",",$arr_fac[1]);
                                    $arr_car_park = explode(",",$arr_fac[2]);
                                }
                            }
                        ?>

                        <div class="form-group clearfix">
                            <label class="control-label col-md-12 row">General:</label>
                            @for($i=0;$i<count($general);$i++)
                            <div class="col-md-4 row">
                                <div class="form-group">
                                    <label class="cr-styled">
                                        <input type="checkbox" name="general[]" value="{{ @$general[$i] }}" id="{{ @$general[$i] }}" {{ in_array($general[$i],@$arr_general ?: []) ? 'checked' : '' }}>
                                        <i class="fa"></i>
                                        {{ @$general[$i] }}
                                    </label>
                                </div>
                            </div>
                            @endfor
                        </div>

                        <div class="form-group clearfix">
                            <label class="control-label col-md-12 row">Sports and Recreation:</label>
                            @for($i=0;$i<count($sports);$i++)
                                <div class="col-md-4 row">
                                    <div class="form-group">
                                        <label class="cr-styled">
                                            <input type="checkbox" name="sports[]" value="{{ @$sports[$i] }}" id="{{ @$sports[$i] }}" {{ in_array($sports[$i],@$arr_sport ?: []) ? 'checked' : '' }}>
                                            <i class="fa"></i>
                                            {{ @$sports[$i] }}
                                        </label>
                                    </div>
                                </div>
                            @endfor
                        </div>


                        <div class="form-group clearfix">
                            <label class="control-label col-md-12 row">Car Park:</label>
                            @for($i=0;$i<count($car_part);$i++)
                                <div class="col-md-4 row">
                                    <div class="form-group">
                                        <label class="cr-styled">
                                            <input type="checkbox" name="car_part[]" value="{{ @$car_part[$i] }}" id="{{ @$car_part[$i] }}" {{ in_array($car_part[$i],@$arr_car_park ?: []) ? 'checked' : '' }}>
                                            <i class="fa"></i>
                                            {{ @$car_part[$i] }}
                                        </label>
                                    </div>
                                </div>
                            @endfor
                        </div>

                    </div>

                    <div class="tab-pane" id="policy">
                        <?php
                            $arr_pol = explode("|",$hotel["policy"])
                        ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="pol">Check-in</label>
                                    <input type="text" name="pol" id="pol" value="{{ old('pol', @$arr_pol[0] ?: '14:00 PM') }}" class="form-control" placeholder="Enter pol here">
                                    @if($errors->has('pol'))
                                        <div class="help-block text-danger">{{ $errors->first('pol') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="pol1">Check-out</label>
                                    <input type="text" name="pol1" id="pol1" value="{{ old('pol1', @$arr_pol[1] ?: '12:00 PM' ) }}" class="form-control" placeholder="Enter pol1 here">
                                    @if($errors->has('pol1'))
                                        <div class="help-block text-danger">{{ $errors->first('pol1') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('pol2') ? ' has-error' : '' }}">
                            <label for="pol2">Cancellation / Prepayment</label>
                            <textarea name="pol2" id="pol2" rows="3" class="form-control simple_editor">{{ old('name', @$arr_pol[2]) }}</textarea>
                            @if($errors->has('pol2'))
                                <div class="help-block text-danger">{{ $errors->first('pol2') }}</div>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('pol3') ? ' has-error' : '' }}">
                            <label for="pol3">Children and extra beds</label>
                            <textarea name="pol3" id="pol3" rows="3" class="form-control simple_editor">{{ old('name', @@$arr_pol[3]) }}</textarea>
                            @if($errors->has('pol3'))
                                <div class="help-block text-danger">{{ $errors->first('pol3') }}</div>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('pol4') ? ' has-error' : '' }}">
                            <label for="pol4">Other notice</label>
                            <textarea name="pol4" id="pol4" rows="3" class="form-control simple_editor">{{ old('name', @$arr_pol[4]) }}</textarea>
                            @if($errors->has('pol4'))
                                <div class="help-block text-danger">{{ $errors->first('pol4') }}</div>
                            @endif
                        </div>

                    </div>

                    <div class="tab-pane" id="dining">
                        <?php
                            $dining_edit = explode("#", $hotel["dining"]);
                            for($i=0;$i<count($dining_edit);$i++){
                                $di_ed1 = explode("|", $dining_edit[$i]);
                            }
                        ?>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name_di[]">Name</label>
                                    <input type="text" name="name_di[]" id="name_di" value="{{ old('name_di[]', @$di_ed1[0]) }}" class="form-control" placeholder="Enter Name here">
                                    @if($errors->has('name_di[]'))
                                        <div class="help-block text-danger">{{ $errors->first('name_di[]') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="capacity[]">Capacity</label>
                                    <input type="text" name="capacity[]" id="name_di" value="{{ old('capacity[]', @$di_ed1[1]) }}" class="form-control" placeholder="Enter capacity here">
                                    @if($errors->has('capacity[]'))
                                        <div class="help-block text-danger">{{ $errors->first('capacity[]') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="opening[]">Opening hours</label>
                                    <input type="text" name="opening[]" id="name_di" value="{{ old('opening[]', @$di_ed1[3]) }}" class="form-control" placeholder="Enter opening here">
                                    @if($errors->has('opening[]'))
                                        <div class="help-block text-danger">{{ $errors->first('opening[]') }}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('food_style[]') ? ' has-error' : '' }}">
                            <label for="food_style[]">Food style</label>
                            <textarea name="food_style[]" id="food_style[]" rows="3" class="form-control simple_editor">{{ old('name', @$di_ed1[2]) }}</textarea>
                            @if($errors->has('food_style[]'))
                                <div class="help-block text-danger">{{ $errors->first('food_style[]') }}</div>
                            @endif
                        </div>


                        <div class="form-group {{ $errors->has('des_dining[]') ? ' has-error' : '' }}">
                            <label for="des_dining[]">Description dining</label>
                            <textarea name="des_dining[]" id="des_dining[]" rows="3" class="form-control simple_editor">{{ old('name', @$di_ed1[4]) }}</textarea>
                            @if($errors->has('des_dining[]'))
                                <div class="help-block text-danger">{{ $errors->first('des_dining[]') }}</div>
                            @endif
                        </div>


                    </div>

                    <div class="tab-pane" id="room">
                        <?php
                        if(isset($hotel)){
                            $arr_price = explode("#",$hotel["price_e"]);
                        }
                        ?>
                        <input type="hidden" name="roomTotal" id="roomTotal" value="{{ count($arr_price)-1 }}">
                        @for($j=0;$j<count($arr_price)-1;$j++)
                            @php
                                $k = $j+1;
                                if(count($arr_price) > 1) {
                                    $arr_p1    = explode("|",$arr_price[$j]);
                                    $arr1 = explode("}",@$arr_p1[4]);
                                    $arr_r1 = explode(",",$arr1[0]);
                                }
                            @endphp
                            <hr>
                            <h2>Room - {{ @$k }}</h2>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="roomtype{{ @$k }}">Room</label>
                                        <input type="text" name="roomtype{{ @$k }}" id="roomtype{{ @$k }}" value="{{ old('roomtype', @$arr_p1[0]) }}" class="form-control" placeholder="Enter room type here">
                                        @if($errors->has('roomtype'))
                                            <div class="help-block text-danger">{{ $errors->first('roomtype') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-2">
                                        <label for="room_number{{ @$k }}">Number Room</label>
                                        <?php
                                        for ($i=1; $i < 301; $i++) {
                                            $v[] = $i;
                                        }
                                        ?>
                                        {!! Form::select('room_number'.$k, $v, @$arr_p1[6], ['class' => 'form-control']) !!}
                                        @if($errors->has('room_number1'))
                                            <div class="help-block text-danger">{{ $errors->first('room_number1') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title text-left">Album Room - {{ @$k }}
                                        <button class="btn btn-success btn-xs" type="button" id="add-new-image{{ @$k }}">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </h3>
                                </div>
                                <div class="panel-body">
                                    <div class="form-bordered row draggable-blocks ui-sortable"
                                         id="roomimages{{ @$k }}">
                                        @if(@$arr_p1[8]) @foreach(explode(',',@$arr_p1[8]) as $image)
                                            <div class="image-item col-md-2 col-sm-2 col-xs-2">
                                                <img src="{{ $image }}" alt="">
                                                <button class="btn btn-danger btn-xs delete-image" type="button">
                                                    <i class="fa fa-trash-o"></i> <span class="sr-only">delete</span>
                                                </button>
                                                <input type="hidden" name="roomimages{{ @$k }}[]" value="{{ $image }}">
                                            </div>
                                        @endforeach @endif
                                    </div>
                                </div>
                            </div>

                            @push('script')
                            <script>
                            var deleteButton{{ $k }} = function () {
                            var button = document.createElement('button'),
                                icon = document.createElement('i'),
                                txt = document.createElement('span');

                            txt.setAttribute('class', 'sr-only');
                            txt.innerText = 'delete';
                            icon.setAttribute('class', 'fa fa-trash-o');
                            button.setAttribute('class', 'btn btn-danger btn-xs delete-image');
                            button.setAttribute('type', 'button');
                            button.appendChild(icon);
                            button.appendChild(txt);

                            return button;
                            },
                            hiddenInput{{ $k }} = function(url) {
                                var input = document.createElement('input');
                                input.setAttribute('type', 'hidden');
                                input.setAttribute('name', 'roomimages{{ $k }}[]');
                                input.setAttribute('value', url);

                                return input;
                            },
                            createNewImageBlock{{ $k }} = function(url) {
                                var images = document.getElementById('roomimages{{ $k }}'),
                                    block = document.createElement('div'),
                                    image = new Image;
                                image.src = url;
                                block.setAttribute('class', 'image-item col-md-2 col-sm-2 col-xs-2');
                                block.appendChild(image);
                                block.appendChild(deleteButton{{ $k }}());
                                block.appendChild(hiddenInput{{ $k }}(url));
                                images.appendChild(block);
                            }

                            $('#add-new-image{{ $k }}').on('click', function (e) {
                                e.preventDefault();

                                moxman.browse({
                                    oninsert: function(args) {
                                        args.files.forEach(function (item, index) {
                                            createNewImageBlock{{ $k }}(item.url);
                                        });
                                    },
                                    view: 'thumbs'
                                });

                            });
                            </script>
                            @endpush

                            <div class="form-group">
                                <label for="area{{ @$k }}">Area</label>
                                <input type="text" name="area{{ @$k }}" id="area{{ @$k }}" value="{{ old('area1', @$arr_p1[1]) }}" class="form-control" placeholder="Enter area here">
                                @if($errors->has('area1'))
                                    <div class="help-block text-danger">{{ $errors->first('area1') }}</div>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('style1') ? ' has-error' : '' }}">
                                <label for="style{{ @$k }}">Style</label>
                                <textarea name="style{{ @$k }}" id="style{{ @$k }}" rows="3" class="form-control simple_editor">{{ old('name', @$arr_p1[2]) }}</textarea>
                                @if($errors->has('style1'))
                                    <div class="help-block text-danger">{{ $errors->first('style1') }}</div>
                                @endif
                            </div>

                            <div class="form-group {{ $errors->has('description1') ? ' has-error' : '' }}">
                                <label for="description{{ @$k }}">Description</label>
                                <textarea name="description{{ @$k }}" id="description{{ @$k }}" rows="3" class="form-control simple_editor">{{ old('name', @$arr_p1[3]) }}</textarea>
                                @if($errors->has('description1'))
                                    <div class="help-block text-danger">{{ $errors->first('description1') }}</div>
                                @endif
                            </div>


                            <div class="form-group clearfix">
                                <label class="control-label col-md-12 row">Facilities:</label>
                                @for($i=0;$i<count($amenitie);$i++)
                                    <div class="col-md-4 row">
                                        <div class="form-group">
                                            <label class="cr-styled">
                                                <input type="checkbox" name="amenitie{{ $j }}[]" value="{{ @$amenitie[$i] }}" id="{{ @$amenitie[$i] }}" {{ in_array($amenitie[$i],@$arr_r1?: []) ? 'checked' : '' }}>
                                                <i class="fa"></i>
                                                {{ @$amenitie[$i] }}
                                            </label>
                                        </div>
                                    </div>
                                @endfor
                            </div>

                            <div class="form-group">
                                <label for="expansion{{ $j }}">Add More</label>
                                <input type="text" name="expansion{{ $j }}" id="expansion{{ $j }}" value="{{ old('expansion0', @$arr1[1]) }}" class="form-control" placeholder="Enter expansion here">
                                @if($errors->has('expansion0'))
                                    <div class="help-block text-danger">{{ $errors->first('expansion0') }}</div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="note_hotel{{ @$k }}">Note</label>
                                <input type="text" name="note_hotel{{ @$k }}" id="note_hotel{{ @$k }}" value="{{ old('note_hotel1', @$arr_p1[7]) }}" class="form-control" placeholder="Enter note here">
                                @if($errors->has('note_hotel1'))
                                    <div class="help-block text-danger">{{ $errors->first('note_hotel1') }}</div>
                                @endif
                            </div>
                        @endfor
                            <div id="room-group"></div>
                            <button type="button" class="btn btn-success btn-sm m-b-5" onclick="addRoom()">Add new Room</button>
                        </div>

                    <div class="tab-pane" id="review">
                        <?php
                            if(isset($hotel)){
                                $rev_data = explode("#", $hotel["review"]);
                            }
                        ?>
                        @if(isset($hotel))
                            @for($j=0;$j<count($rev_data);$j++)
                            @php $review_data = explode("|", $rev_data[$j]); @endphp
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="name_rev[]">Name</label>
                                        <input type="text" name="name_rev[]" id="name_rev[]" value="{{ old('name_rev[]', @$review_data[0]) }}" class="form-control" placeholder="Enter name here">
                                        @if($errors->has('name_rev[]'))
                                            <div class="help-block text-danger">{{ $errors->first('name_rev[]') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="country[]">&ensp;</label>
                                        {!! Form::select('country[]', $country, @$review_data[1], ['class' => 'form-control']) !!}
                                        @if($errors->has('country[]'))
                                            <div class="help-block text-danger">{{ $errors->first('country[]') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="country[]">Facilities</label>
                                    <?php
                                    for($i=10;$i>=1;$i=$i-0.1){
                                        $facilities[] = $i;
                                    }
                                    ?>
                                    {!! Form::select('facilities_rev[]', $facilities, @$review_data[2], ['class' => 'form-control']) !!}
                                    @if($errors->has('facilities_rev[]'))
                                        <div class="help-block text-danger">{{ $errors->first('facilities_rev[]') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="country[]">Room</label>
                                    {!! Form::select('room_rev[]', $facilities, @$review_data[3], ['class' => 'form-control']) !!}
                                    @if($errors->has('room_rev[]'))
                                        <div class="help-block text-danger">{{ $errors->first('room_rev[]') }}</div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <label for="country[]">Dining</label>
                                    {!! Form::select('dining_rev[]', $facilities, @$review_data[4], ['class' => 'form-control']) !!}
                                    @if($errors->has('dining_rev[]'))
                                        <div class="help-block text-danger">{{ $errors->first('dining_rev[]') }}</div>
                                    @endif
                                </div>
                            </div>
                            </div>
                            <div class="form-group {{ $errors->has('comment[]') ? ' has-error' : '' }}">
                            <label for="comment[]">Comment</label>
                            <textarea name="comment[]" id="comment[]" rows="3" class="form-control simple_editor">{{ old('name', @$review_data[5]) }}</textarea>
                            @if($errors->has('comment[]'))
                                <div class="help-block text-danger">{{ $errors->first('comment[]') }}</div>
                            @endif
                        </div>
                            @endfor
                        @else
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="name_rev[]">Name</label>
                                        <input type="text" name="name_rev[]" id="name_rev[]" value="{{ old('name_rev[]') }}" class="form-control" placeholder="Enter name here">
                                        @if($errors->has('name_rev[]'))
                                            <div class="help-block text-danger">{{ $errors->first('name_rev[]') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="country[]">&ensp;</label>
                                        {!! Form::select('country[]', $country, null,['class' => 'form-control']) !!}
                                        @if($errors->has('country[]'))
                                            <div class="help-block text-danger">{{ $errors->first('country[]') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="country[]">Facilities</label>
                                        <?php
                                        for($i=10;$i>=1;$i=$i-0.1){
                                            $facilities[] = $i;
                                        }
                                        ?>
                                        {!! Form::select('facilities_rev[]', $facilities, null, ['class' => 'form-control']) !!}
                                        @if($errors->has('facilities_rev[]'))
                                            <div class="help-block text-danger">{{ $errors->first('facilities_rev[]') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="country[]">Room</label>
                                        {!! Form::select('room_rev[]', $facilities, null, ['class' => 'form-control']) !!}
                                        @if($errors->has('room_rev[]'))
                                            <div class="help-block text-danger">{{ $errors->first('room_rev[]') }}</div>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        <label for="country[]">Dining</label>
                                        {!! Form::select('dining_rev[]', $facilities, null, ['class' => 'form-control']) !!}
                                        @if($errors->has('dining_rev[]'))
                                            <div class="help-block text-danger">{{ $errors->first('dining_rev[]') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('comment[]') ? ' has-error' : '' }}">
                                <label for="comment[]">Comment</label>
                                <textarea name="comment[]" id="comment[]" rows="3" class="form-control simple_editor">{{ old('name', null) }}</textarea>
                                @if($errors->has('comment[]'))
                                    <div class="help-block text-danger">{{ $errors->first('comment[]') }}</div>
                                @endif
                            </div>
                        @endif

                        <div id="review-group"></div>
                        <button type="button" class="btn btn-success btn-sm m-b-5" onclick="addReview()">Add new Review</button>
                    </div>

                    <div class="tab-pane" id="viewpoit">
                        @php if(isset($hotel->ourviewpoits)){

                            $point = explode('|',$hotel->ourviewpoits);

                        } @endphp
                        <div class="form-group {{ $errors->has('forte') ? ' has-error' : '' }}">
                            <label for="forte">Forte +</label>
                            <textarea name="forte" id="forte" rows="3" class="form-control simple_editor">{{ old('name', @$point[0]) }}</textarea>
                            @if($errors->has('forte'))
                                <div class="help-block text-danger">{{ $errors->first('forte') }}</div>
                            @endif
                        </div>


                        <div class="form-group {{ $errors->has('deficiency') ? ' has-error' : '' }}">
                            <label for="deficiency">Deficiency -</label>
                            <textarea name="deficiency" id="deficiency" rows="3" class="form-control simple_editor">{{ old('name', @$point[1]) }}</textarea>
                            @if($errors->has('deficiency'))
                                <div class="help-block text-danger">{{ $errors->first('deficiency') }}</div>
                            @endif
                        </div>


                    </div>
                </div>


                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#meeting" data-toggle="tab" aria-expanded="true">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Meeting Rooms</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#time" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Distances</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="meeting">
                        <?php
                            $meeting_arr = explode("#", $hotel["meeting_rooms"]);
                        ?>
                        <div class="form-group {{ $errors->has('meeting_text') ? ' has-error' : '' }}">
                            <label for="meeting_text">Meeting Rooms</label>
                            <textarea name="meeting_text" id="meeting_text" rows="3" class="form-control simple_editor">{{ old('name', @$meeting_arr[0]) }}</textarea>
                            @if($errors->has('meeting_text'))
                                <div class="help-block text-danger">{{ $errors->first('meeting_text') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane" id="time">
                        <div class="form-group {{ $errors->has('time_text') ? ' has-error' : '' }}">
                            <label for="time_text">Times & Distances</label>
                            <textarea name="time_text" id="time_text" rows="3" class="form-control simple_editor">{{ old('name', @$hotel->times_distances) }}</textarea>
                            @if($errors->has('time_text'))
                                <div class="help-block text-danger">{{ $errors->first('time_text') }}</div>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
                    @if($hotel->photo_e) @foreach(explode('|',$hotel->photo_e) as $image)
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
            <div class="panel-heading">
                <h3 class="panel-title">Option</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" name="price" min="0" id="price" value="{{ old('price', @$hotel->price ?: 0) }}" class="form-control" >
                    @if($errors->has('price'))
                        <div class="help-block text-danger">{{ $errors->first('price') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="discount">Discount</label>
                    <input type="text" name="discount" id="discount" value="{{ old('discount', @$hotel->discount?: 0) }}" class="form-control" placeholder="Enter discount here">
                    @if($errors->has('discount'))
                        <div class="help-block text-danger">{{ $errors->first('discount') }}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Choose Hotel Category</h3>
            </div>
            <div class="panel-body">
                <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                    {{  Form::select('category[]', $groups, @$hotel ? @$hotel->categories->map->id->toArray() : 'Null', ['multiple' => true, 'class' => '', 'id' => 'my_multi_select']) }}
                    @if($errors->has('category'))
                        <div class="help-block text-danger">{{ $errors->first('category') }}</div>
                    @endif
                </div>
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Photo</h3></div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="choose-thumbnail">
                        {!! Form::hidden('photo', @$hotel->photo, ['id' => 'photo']) !!}
                    </div>
                </div>
            </div><!-- panel-body -->
        </div> <!-- panel -->

    </div>
</div>

@push('footer')

<div id="template" style="display: none">
    <div id="room-group-template">
        <hr>
        <h2>Room - __KEY__</h2>
        <div class="form-group">
            <div class="row">
                <div class="col-md-8">
                    <label for="roomtype__KEY__">Room</label>
                    <input type="text" name="roomtype__KEY__" id="roomtype__KEY__" value="" class="form-control" placeholder="Enter room type here">
                </div>
                <div class="col-md-2">
                    <label for="room_number__KEY__">Number Room</label>
                    <?php
                    $j = array();
                    for ($i=1; $i < 301; $i++) {
                        $j[] = $i;
                    }
                    ?>
                    {!! Form::select('room_number__KEY__', $j, null, ['class' => 'form-control']) !!}
                </div>
            </div>
        </div>

        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title text-left">Album Room - __KEY__
                        <button class="btn btn-success btn-xs" type="button" id="add-new-image__KEY__">
                            <i class="fa fa-plus"></i>
                        </button>
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="form-bordered row draggable-blocks ui-sortable"
                         id="roomimages__KEY__">
                    </div>
                </div>
            </div>

        <div class="form-group">
            <label for="area__KEY__">Area</label>
            <input type="text" name="area__KEY__" id="area__KEY__" value="{{ old('area1', null) }}" class="form-control" placeholder="Enter area1 here">
            @if($errors->has('area__KEY__'))
                <div class="help-block text-danger">{{ $errors->first('area__KEY__') }}</div>
            @endif
        </div>

        <div class="form-group {{ $errors->has('style__KEY__') ? ' has-error' : '' }}">
            <label for="style__KEY__">Style</label>
            <textarea name="style__KEY__" id="style__KEY__" rows="3" class="form-control simple_editor">{{ old('name', null) }}</textarea>
            @if($errors->has('style__KEY__'))
                <div class="help-block text-danger">{{ $errors->first('style__KEY__') }}</div>
            @endif
        </div>

        <div class="form-group {{ $errors->has('description1') ? ' has-error' : '' }}">
            <label for="description__KEY__">Description</label>
            <textarea name="description__KEY__" id="description__KEY__" rows="3" class="form-control simple_editor">{{ old('name', null) }}</textarea>
            @if($errors->has('description__KEY__'))
                <div class="help-block text-danger">{{ $errors->first('description__KEY__') }}</div>
            @endif
        </div>


        <div class="form-group clearfix">
            <label class="control-label col-md-12 row">Facilities:</label>
            @for($i=0;$i<count($amenitie);$i++)
                <div class="col-md-4 row">
                    <div class="form-group">
                        <label class="cr-styled">
                            <input type="checkbox" name="amenitie__KEYMINUS__[]" value="{{ @$amenitie[$i] }}" id="{{ @$amenitie[$i] }}" {{ in_array($amenitie[$i],@$arr_r1?: []) ? 'checked' : '' }}>
                            <i class="fa"></i>
                            {{ @$amenitie[$i] }}
                        </label>
                    </div>
                </div>
            @endfor
        </div>

        <div class="form-group">
            <label for="expansion__KEY__">Add More</label>
            <input type="text" name="expansion__KEY__" id="expansion__KEYMINUS__" value="{{ old('expansion__KEYMINUS__', null) }}" class="form-control" placeholder="Enter expansion here">
            @if($errors->has('expansion__KEYMINUS__'))
                <div class="help-block text-danger">{{ $errors->first('expansion__KEYMINUS__') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="note_hotel__KEY__">Note</label>
            <input type="text" name="note_hotel__KEY__" id="note_hotel__KEY__" value="{{ old('note_hotel__KEY__', null) }}" class="form-control" placeholder="Enter note here">
            @if($errors->has('note_hotel__KEY__'))
                <div class="help-block text-danger">{{ $errors->first('note_hotel__KEY__') }}</div>
            @endif
        </div>

    </div>

    <div id="review-group-template">
        <div class="form-group">
            <div class="row">
                <div class="col-md-8">
                    <label for="name_rev[]">Name</label>
                    <input type="text" name="name_rev[]" id="name_rev[]" value="{{ old('name_rev[]') }}" class="form-control" placeholder="Enter name here">
                    @if($errors->has('name_rev[]'))
                        <div class="help-block text-danger">{{ $errors->first('name_rev[]') }}</div>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="country[]">&ensp;</label>
                    {!! Form::select('country[]', $country, null,['class' => 'form-control']) !!}
                    @if($errors->has('country[]'))
                        <div class="help-block text-danger">{{ $errors->first('country[]') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-4">
                    <label for="country[]">Facilities</label>
                    <?php
                    for($i=10;$i>=1;$i=$i-0.1){
                        $facilities[] = $i;
                    }
                    ?>
                    {!! Form::select('facilities_rev[]', $facilities, null, ['class' => 'form-control']) !!}
                    @if($errors->has('facilities_rev[]'))
                        <div class="help-block text-danger">{{ $errors->first('facilities_rev[]') }}</div>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="country[]">Room</label>
                    {!! Form::select('room_rev[]', $facilities, null, ['class' => 'form-control']) !!}
                    @if($errors->has('room_rev[]'))
                        <div class="help-block text-danger">{{ $errors->first('room_rev[]') }}</div>
                    @endif
                </div>
                <div class="col-md-4">
                    <label for="country[]">Dining</label>
                    {!! Form::select('dining_rev[]', $facilities, null, ['class' => 'form-control']) !!}
                    @if($errors->has('dining_rev[]'))
                        <div class="help-block text-danger">{{ $errors->first('dining_rev[]') }}</div>
                    @endif
                </div>
            </div>
        </div>
        <div class="form-group {{ $errors->has('comment[]') ? ' has-error' : '' }}">
            <label for="comment[]">Comment</label>
            <textarea name="comment[]" id="comment[]" rows="3" class="form-control simple_editor">{{ old('name', null) }}</textarea>
            @if($errors->has('comment[]'))
                <div class="help-block text-danger">{{ $errors->first('comment[]') }}</div>
            @endif
        </div>
    </div>
</div>

@endpush

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
            $('[name="seo_description"').val($(this).val().substr(0,169));
            $('[data="description"]').html($(this).val().substr(0,169));
            $('[data="url"]').html(slugify($(this).val()));
            $('[name="slug"').val(slugify($(this).val()));
        });
        $('[name="oveview"').keyup(function() {
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
<div id="room-group-js">
    <script>
        var deleteButton = function () {
        var button = document.createElement('button'),
            icon = document.createElement('i'),
            txt = document.createElement('span');

        txt.setAttribute('class', 'sr-only');
        txt.innerText = 'delete';
        icon.setAttribute('class', 'fa fa-trash-o');
        button.setAttribute('class', 'btn btn-danger btn-xs delete-image');
        button.setAttribute('type', 'button');
        button.appendChild(icon);
        button.appendChild(txt);

        return button;
        },
        hiddenInput__KEY__ = function(url) {
            var input = document.createElement('input');
            input.setAttribute('type', 'hidden');
            input.setAttribute('name', 'roomimages__KEY__[]');
            input.setAttribute('value', url);

            return input;
        },
        createNewImageBlock__KEY__ = function(url) {
            var images = document.getElementById('roomimages__KEY__'),
                block = document.createElement('div'),
                image = new Image;
            image.src = url;
            block.setAttribute('class', 'image-item col-md-2 col-sm-2 col-xs-2');
            block.appendChild(image);
            block.appendChild(deleteButton());
            block.appendChild(hiddenInput(url));
            images.appendChild(block);
        }

        $('#add-new-image__KEY__').on('click', function (e) {
            e.preventDefault();

            moxman.browse({
                oninsert: function(args) {
                    args.files.forEach(function (item, index) {
                        createNewImageBlock__KEY__(item.url);
                    });
                },
                view: 'thumbs'
            });

        });
    </script>
</div>
@endpush