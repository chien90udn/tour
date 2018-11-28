@extends('layouts.backend')

@section('title', 'Cấu hình chung')
@push('footer')
<script src="{{ backend_asset('vendor/tinymce/plugins/moxiemanager/js/moxman.loader.min.js') }}"></script>
@endpush
@section('content')
    <div class="row">
        <form action="{{ route('admin.option.save') }}" method="POST">
            {{ csrf_field() }}
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Cấu hình chung</h3></div>
                        <div class="panel-body">
                            <div class="col-sm-4">
                                <h2>Thông tin website</h2>
                                <p>
                                    Thông tin cơ bản của website, thẻ tiêu đề và thẻ mô tả giúp xác định cửa hàng của bạn xuất hiện trên công cụ tìm kiếm
                                </p>
                            </div>
                            <div class="col-sm-8">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_name" class="control-label">Tiêu đề website</label>
                                        <input type="text" class="form-control" name="site_name" id="site_name" value="{{ old('site_name', get_option('site_name')) }}" placeholder="Nhập tiêu đề website">
                                        @if($errors->has('site_name'))
                                            <div class="help-block">{{ $errors->first('site_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_description" class="control-label">Mô tả website</label>
                                        <input type="text" class="form-control" name="site_description" id="site_description" value="{{ old('site_description', get_option('site_description')) }}" placeholder="Nhập mô tả website">
                                        @if($errors->has('site_description'))
                                            <div class="help-block">{{ $errors->first('site_description') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="site_keywords" class="control-label">Từ khóa về website</label>
                                        <input type="text" class="form-control" placeholder="Từ khóa về website" name="site_keywords"  value="{{ old('site_keywords', get_option('site_keywords')) }}">
                                        @if($errors->has('site_keywords'))
                                            <div class="help-block">{{ $errors->first('site_keywords') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="site_logo" class="control-label">Logo trang</label>
                                        <div class="choose-thumbnail"><img src="{{ old('site_logo', get_option('site_logo')) }}">
                                            <input id="site_logo" name="site_logo" type="hidden" value="{{ old('site_logo', get_option('site_logo')) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form_group">
                                        <label for="site_favicon" class="control-label">Icon trang</label>
                                        <div class="choose-thumbnail"><img src="{{ old('site_favicon', get_option('site_favicon')) }}">
                                            <input id="site_favicon" name="site_favicon" type="hidden" value="{{ old('site_favicon', get_option('site_favicon')) }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border: solid 0.5px #DDDDDD;">
                            <div class="col-sm-4">
                                <h2>Thông tin website</h2>
                                <p>
                                    Thông tin cơ bản của website, thẻ tiêu đề và thẻ mô tả giúp xác định cửa hàng của bạn xuất hiện trên công cụ tìm kiếm
                                </p>
                            </div>
                            <div class="col-sm-8">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="site_business_license" class="control-label">Tên công ty</label>
                                        <input class="form-control" placeholder="Tên công ty" name="site_business_license" type="text" value="{{ old('site_business_license', get_option('site_business_license')) }}" id="site_business_license">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="site_email" class="control-label">Email liên hệ</label>
                                        <input class="form-control" placeholder="Email liên hệ" name="site_email" type="text" value="{{ old('site_email', get_option('site_email')) }}" id="site_email">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="site_phone" class="control-label">Điện thoại</label>
                                        <input class="form-control" placeholder="Điện thoại" name="site_phone" type="text" value="{{ old('site_phone', get_option('site_phone')) }}" id="site_phone">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="site_fax" class="control-label">Fax</label>
                                        <input class="form-control" placeholder="Fax" name="site_fax" type="text" value="{{ old('site_fax', get_option('site_fax')) }}" id="site_fax">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="site_address" class="control-label">Địa chỉ</label>
                                        <input class="form-control" placeholder="Địa chỉ" name="site_address" type="text" value="{{ old('site_address', get_option('site_address')) }}" id="site_address">
                                    </div>
                                </div>
                            </div>
                            <hr style="border: solid 0.5px #DDDDDD;">
                            <div class="col-sm-4">
                                <h2>Code Scripts</h2>
                                <p>Chứa các đoạn mã Javascript hoặc CSS mà bạn muốn tùy biến website.</p>
                            </div>
                            <div class="col-sm-8">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="google_analytics" class="control-label">Google Analytics</label>
                                        <textarea class="form-control" placeholder="Google Analytics" name="google_analytics" cols="50" rows="10" id="google_analytics">{{ old('google_analytics', get_option('google_analytics')) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="google_remaketing" class="control-label">Google Remaketing</label>
                                        <textarea class="form-control" placeholder="Google Remaketing" name="google_remaketing" cols="50" rows="10" id="google_remaketing">{{ old('google_remaketing', get_option('google_remaketing')) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook_pixel" class="control-label">Facebook Pixel</label>
                                        <textarea class="form-control" placeholder="Facebook Pixel" name="facebook_pixel" cols="50" rows="10" id="facebook_pixel">{{ old('facebook_pixel', get_option('facebook_pixel')) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="livechat" class="control-label">Livechat</label>
                                        <textarea class="form-control" placeholder="Livechat" name="livechat" cols="50" rows="10" id="livechat">{{ old('livechat', get_option('livechat')) }}</textarea>
                                    </div>
                                </div>
                                {{--<div class="col-md-12">--}}
                                    {{--<slide-box-for-options id="home-slider" name="home-slider" :data="{{ old('home-slider', json_encode(get_option('home-slider', []))) }}"></slide-box-for-options>--}}
                                {{--</div>--}}
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-fw fa-check-circle"></i> Lưu
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
            </div><!-- panel-body -->
        </form>
    </div>
@endsection