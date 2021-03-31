@extends("layouts.base")
@push('styles')
    <link rel="stylesheet" type="text/css" href="{{asset('portfolio.css')}}"/>
@endpush
@push('scripts')
    <script src="{{asset('js/model.js')}}"></script>
@endpush

@section("content")
    <h2>Our portfolio</h2>
    <hr>
    <div class="row">
    @foreach($objs as $one)
    <div class="col md-5">
        <div class="card" style="width: 100%;">
            <img class="card-img-top" src="{{asset('uploads/'.$one->user_id.'/s'.$one->picture)}}" alt="{{$one->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$one->name}}</h5>
                <p class="card-text">{!! $one->body !!}</p>
                <a href="#" class="btn btn-light model" data-id="{{$one->id}}">More details</a>
                <a href="{{asset('work/'.$one->id)}}" target="_blank" class="btn btn-light">Open in new window</a>
            </div>
        </div>
    </div>
    @endforeach
    </div>
@endsection 