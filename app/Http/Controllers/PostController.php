<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Yajra\DataTables\DataTables;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }

    public function getData()
    {
        $posts = Post::query();
        return DataTables::of($posts)
            ->addColumn('action', function ($post) {
                return '<a href="'.route('posts.edit', $post->id).'" class="btn btn-primary btn-sm">Edit</a>';
            })
            ->make(true);
    }
}
