<img class="card-img-top" src="{{asset('uploads/'.$obj->user_id.'/'.$obj->picture)}}" width="100%" alt="{{$obj->name}}">
            <div class="card-body">
                <h5 class="card-title">{{$obj->name}}</h5>
                <p class="card-text">{!! $obj->body !!}</p>
                <a href="{{asset('work/'.$obj->id)}}" target="_blank" class="btn btn-light">Открыть в новом окне</a>
            </div>