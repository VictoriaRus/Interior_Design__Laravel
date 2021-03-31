@extends('layouts.base')
@push('scripts')
<script>
function delete_position(url,ask){
    if(confirm(ask)){
        location.href=url;
    }
    return false;
}

</script>
@endpush
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">My portfolio</div>

                <div class="card-body">
                    <form method="post" action="{{asset('portfolio/add')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            @error('name')
                                    <p class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </p>
                            @enderror
                            <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="body" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                            @error('body')
                                    <p class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </p>
                            @enderror
                            <textarea class="form-control" id="body" name="body" row="4" ></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="picture1" class="col-sm-2 col-form-label">Select image</label>
                            <div class="col-sm-10">
                            <input type="file" class="form-control-file" name="picture1" id="picture1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-bordered" width="100%">
                        <thead>
                        <tr>
                            <th>Picture</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($works as $work)
                        <tr>
                            <td>
                            <img src="{{asset('uploads/'.$work->user_id.'/ss'.$work->picture)}}" alt="{{$work->name}}">
                            </td>
                            <td>
                            {{{$work->name}}}
                            </td>
                            <td>
                            <a href="#" onclick="delete_position('{{asset('work/delete/'.$work->id)}}','Вы действительно хотите её удолить?')" class="btn btn-danger btn-blok">Del</a>
                            <a href="{{asset('work/'.$work->id)}}" class="btn btn-info btn-blok" target="_blank">Show</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
    </div>
</div>

@endsection
