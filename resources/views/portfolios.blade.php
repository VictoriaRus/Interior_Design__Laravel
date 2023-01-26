@extends('layouts.base')
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('portfolio.css') }}" />
@endpush
@push('scripts')
    <script src="{{ asset('js/model.js') }}"></script>
@endpush

@section('content')
    <hr>
    <div class="container-fluid">
        <h2 class="title">Мои работы</h2>
        <div class="row justify-content-center">
            @foreach ($objs as $one)
                <div id="test" class="col-sm-3 main-portfolio">
                    <div class='holder'>
                        <a href="{{ asset('work/' . $one->id) }}">
                            <img class="card-img-top" src="{{ asset('uploads/' . $one->user_id . '/s' . $one->picture) }}"
                                alt="{{ $one->name }}">
                        </a>
                        <div class='block'>
                            <br>
                            <a href="{{ asset('work/' . $one->id) }}">
                                <h6 class="navbar-brand a">{{ $one->name }}</h6>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
