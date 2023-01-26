<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\Post;
use App\Http\Controllers\Controller;
use App\Models\Blog_posts;
use Illuminate\Http\Request;

class MyHomeController extends Controller
{
    public function index(){
        $posts_count = Blog_posts::all()->count();//вывод колличество постов в админку
        return view('admin.home.index', [
            'posts_count' => $posts_count
        ]);
    }
}
