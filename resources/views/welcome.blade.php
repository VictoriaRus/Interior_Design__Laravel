@extends("layouts.base")
@push('picture')
    <div class="col-sm-12">
        <img src="1-4.jpg" style="width: 100%">
    </div>
@endpush
@section('content')
    <h2>{{ $obj->name }}</h2>
    <br>
    <p>{!! $obj->body !!}</p>
@endsection
