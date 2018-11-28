@extends('layouts.backend')

@section('title', 'Cấu hình giao diện')
@push('footer')
<script src="{{ backend_asset('vendor/tinymce/plugins/moxiemanager/js/moxman.loader.min.js') }}"></script>
@endpush
@section('content')
    <div class="row">
        <form action="{{ route('admin.themes.option.save') }}" method="POST">
            {{ csrf_field() }}
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 class="panel-title">Cấu hình trang chủ</h3></div>
                    <div class="panel-body">
                        <div class="col-sm-4">
                            <h2>Giao diện website</h2>
                            <p>
                                Chỉnh sửa giao diện theo cách của bạn.
                            </p>
                        </div>
                        <div class="col-sm-8">
                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="international-tour-license" class="control-label">International Tour License</label>
                                    <textarea class="form-control editor" placeholder="International Tour License" name="international-tour-license" cols="50" rows="10" id="international-tour-license">{{ old('international-tour-license', get_option('international-tour-license')) }}</textarea>
                                </div>
                            </div> --}}
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Thành viên hỗ trợ</label>
                                    <slide-box-for-options id="member-slider-support" name="member-slider-support" :data="{{ old('member-slider-support', json_encode(get_option('member-slider-support', []))) }}"></slide-box-for-options>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Slider trang chủ</label>
                                    <slide-box-for-options id="home-slider" name="home-slider" :data="{{ old('home-slider', json_encode(get_option('home-slider', []))) }}"></slide-box-for-options>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="bottom-slider" class="control-label">Nội dung dưới Slider</label>
                                    <textarea class="form-control simple_editor" placeholder="Nội dung dưới Slider" name="bottom-slider" cols="50" rows="10" id="bottom-slider">{{ old('bottom-slider', get_option('bottom-slider')) }}</textarea>
                                </div>
                            </div>
                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="site_name" class="control-label">Slider thành viên</label>
                                    <slide-box-for-options id="member-slider" name="member-slider" :data="{{ old('member-slider', json_encode(get_option('member-slider', []))) }}"></slide-box-for-options>
                                </div>
                            </div> --}}
                            

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="main-why" class="control-label">Giới thiệu</label>
                                    <textarea class="form-control editor" placeholder="Google Analytics" name="main-why" cols="50" rows="10" id="main-why">{{ old('main-why', get_option('main-why')) }}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="main-why" class="control-label">Travel Guides</label>
                                    <textarea class="form-control editor" placeholder="Travel Guides" name="travel-guides" cols="50" rows="10" id="travel-guides">{{ old('travel-guides', get_option('travel-guides')) }}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="main-why" class="control-label">Transfer</label>
                                    <textarea class="form-control editor" placeholder="Transfer" name="transfer-block" cols="50" rows="10" id="transfer-block">{{ old('transfer-block', get_option('transfer-block')) }}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="main-why" class="control-label">Why book with us?</label>
                                    <textarea class="form-control editor" placeholder="Why book with us?" name="why-book-with-us" cols="50" rows="10" id="why-book-with-us">{{ old('why-book-with-us', get_option('why-book-with-us')) }}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="main-why" class="control-label">Why us right side bar</label>
                                    <textarea class="form-control editor" placeholder="Why us right side bar" name="why-us-right-side-bar" cols="50" rows="10" id="why-us-right-side-bar">{{ old('why-us-right-side-bar', get_option('why-us-right-side-bar')) }}</textarea>
                                </div>
                            </div>

                            {{-- <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="best-month" class="control-label">Tiêu đề Best Tours</label>
                                    <input type="text" class="form-control" name="best-month" id="best-month" value="{{ old('best-month', get_option('best-month')) }}" placeholder="Nhập tiêu đề best tour">
                                    @if($errors->has('best-month'))
                                        <div class="help-block">{{ $errors->first('best-month') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="best-month-description" class="control-label">Mô tả Best Tours</label>
                                    <textarea class="form-control simple_editor" placeholder="Best Tours" name="best-month-description" cols="50" rows="10" id="best-month-description">{{ old('best-month-description', get_option('best-month-description')) }}</textarea>
                                </div>
                            </div>
                            <hr style="border: 0.5px solid rgb(221, 221, 221);">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title-travel-txt" class="control-label">Tiêu đề Why Travel With Us</label>
                                    <input type="text" class="form-control" name="title-travel-txt" id="title-travel-txt" value="{{ old('title-travel-txt', get_option('title-travel-txt')) }}" placeholder="Nhập Tiêu đề Why Travel With Us">
                                    @if($errors->has('title-travel-txt'))
                                        <div class="help-block">{{ $errors->first('title-travel-txt') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description-travel-txt" class="control-label">Mô tả Why Travel With Us</label>
                                    <textarea class="form-control simple_editor" placeholder="Best Tours" name="description-travel-txt" cols="50" rows="10" id="description-travel-txt">{{ old('description-travel-txt', get_option('description-travel-txt')) }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="travel-txt" class="control-label">Nội dung Why Travel With Us</label>
                                    <textarea class="form-control editor" placeholder="Why Travel With Us Content" name="travel-txt" cols="50" rows="10" id="travel-txt">{{ old('travel-txt', get_option('travel-txt')) }}</textarea>
                                </div>
                            </div>
                            
                            <hr style="border: 0.5px solid rgb(221, 221, 221);">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title-inspiration" class="control-label">Tiêu đề Introduction Country</label>
                                    <textarea type="text" class="form-control editor" name="title-inspiration" id="title-inspiration" placeholder="Nhập Tiêu đề Inspiration">{{ old('title-inspiration', get_option('title-inspiration')) }}</textarea>
                                    @if($errors->has('title-inspiration'))
                                        <div class="help-block">{{ $errors->first('title-inspiration') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="description-inspiration" class="control-label">Mô tả Introduction Country</label>
                                    <textarea class="form-control simple_editor" placeholder="Best Tours" name="description-inspiration" cols="50" rows="10" id="description-inspiration">{{ old('description-inspiration', get_option('description-inspiration')) }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="inspiration-block" class="control-label">Nội dung Introduction Country</label>
                                    <textarea class="form-control editor" placeholder="Inspiration Block" name="inspiration-block" cols="50" rows="10" id="inspiration-block">{{ old('inspiration-block', get_option('inspiration-block')) }}</textarea>
                                </div>
                            </div>
                            <hr style="border: 0.5px solid rgb(221, 221, 221);">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="travel-guide" class="control-label">Tiêu đề Travel Guide</label>
                                    <input type="text" class="form-control" name="travel-guide" id="travel-guide" value="{{ old('travel-guide', get_option('travel-guide')) }}" placeholder="Nhập tiêu đề travel guide">
                                    @if($errors->has('travel-guide'))
                                        <div class="help-block">{{ $errors->first('travel-guide') }}</div>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="travel-guide-description" class="control-label">Mô tả Travel Guide</label>
                                    <textarea class="form-control simple_editor" placeholder="Best Tours" name="travel-guide-description" cols="50" rows="10" id="travel-guide-description">{{ old('travel-guide-description', get_option('travel-guide-description')) }}</textarea>
                                </div>
                            </div> --}}
                        </div>
                        <hr style="border: 0.5px solid rgb(221, 221, 221);">
                        <div class="col-sm-4">
                            <h2>Customize tour</h2>
                            <p>
                                Chỉnh sửa giao diện Customize tour.
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="customize_tour" class="control-label">Nội dung trang Customize tour</label>
                                    <textarea class="form-control editor" placeholder="Nội dung trang Customize tour" name="customize_tour" cols="50" rows="10" id="customize_tour">{{ old('customize_tour', get_option('customize_tour')) }}</textarea>
                                </div>
                            </div>
                        </div>
                        <hr style="border: 0.5px solid rgb(221, 221, 221);">
                        <div class="col-sm-4">
                            <h2>Giao diện liên hệ</h2>
                            <p>
                                Chỉnh sửa giao diện trang liên hệ.
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="contact_title" class="control-label">Tiêu đề liên hệ</label>
                                    <input class="form-control" placeholder="Tiêu đề liên hệ" name="contact_title" type="text" value="{{ old('contact_title', get_option('contact_title')) }}" id="contact_title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="contact_content" class="control-label">Nội dung trang liên hệ</label>
                                    <textarea class="form-control editor" placeholder="Nội dung trang liên hệ" name="contact_content" cols="50" rows="10" id="contact_content">{{ old('contact_content', get_option('contact_content')) }}</textarea>
                                </div>
                            </div>
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