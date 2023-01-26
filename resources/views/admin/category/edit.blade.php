@extends('layouts.admin_layout')

@section('title', 'Редоктирование категории блога')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редоктирование категории блога: {{$caregories_blog->title}}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button> 
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
            </div>
 @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card card-primary">

                        <!-- form start    url('edit/'.$caregories_blog->id)
                        'categories_blog.update', $caregories_blog->id),'CaregoriesBlog@update'-->
                      
                        <form action="{{ route('categories_blog.update', $caregories_blog->id) }}" method="POST">
                           
                            <input type="hidden" name="_method" value="PUT">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название</label>
                                    <input type="text" name="title" value="{{$caregories_blog->title}}" class="form-control" id="exampleInputEmail1"
                                        placeholder="Введите название категории" required>
                                </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
