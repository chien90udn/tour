@extends('layouts.backend')
@push('script')
<script src="{{ backend_asset('js/tools.js') }}"></script>
@endpush
@section('title', 'Tools Get Cruises')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.crawler.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.crawler.form')
            </form>
        </div>
    </div>
@endsection