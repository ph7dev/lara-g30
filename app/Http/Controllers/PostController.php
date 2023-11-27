<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('blog.index', [
            'posts' => DB::table('posts')->paginate(),
        ]);
    }

    public function view(int $id)
    {
        return view('blog.view', [
            //'post' => DB::table('posts')->where('id', $id)->get(),
            'post' => DB::table('posts')->find($id)
        ]);
    }
}
