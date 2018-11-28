@extends('layouts.backend')

@section('title', 'View Contact')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                {{method_field('PUT') }}
                @include('admin.contact.form')
            </form>
        </div>
    </div>
@endsection