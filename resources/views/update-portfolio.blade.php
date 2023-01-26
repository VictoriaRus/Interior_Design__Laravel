@extends('layouts.admin_layout')

@section('title', 'Обновление записи')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">Обновление записи</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('work-update-submit', $obj->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Имя</label>
                                <div class="col-sm-10">
                                    @error('name')
                                        <p class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                    <input type="text" class="form-control" value="{{ $obj->name }}" name="name"
                                        id="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="body" class="col-sm-2 col-form-label">Описание</label>
                                <div class="col-sm-10">
                                    @error('body')
                                        <p class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </p>
                                    @enderror
                                    <textarea class="form-control" id="body" name="body"
                                        row="4">{{ $obj->body }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="picture1" class="col-sm-2 col-form-label">Изменить изображение</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control-file" value="{{ $obj->picture }}" name="picture1"
                                        id="picture1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Обновить</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
