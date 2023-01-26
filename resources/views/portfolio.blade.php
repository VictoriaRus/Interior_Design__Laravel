@extends("layouts.base")

@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('portfolio.css') }}" />
@endpush

@section('content')
    <div class="container-fluid">
        <hr>
        <div class="row justify-content-center row-my">
            <div class="col-sm-7">
                <img class="portfolio" src="{{ asset('uploads/' . $obj->user_id . '/' . $obj->picture) }}"
                    alt="{{ $obj->name }}">
            </div>

            <div class="col-sm-4 project-text">
                <h2 class="project">{{ $obj->name }} </h2>

                <p>{!! $obj->body !!}</p>
                <hr>
                <p>Дата публикации: {!! $obj->created_at !!}</p>
            </div>
        </div>
    </div>

@endsection
