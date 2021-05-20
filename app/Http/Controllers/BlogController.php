<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * ブログ一覧を表示する
     */
    public function showList()
    {
        $blogs = Blog::all();
        return view('blog.list', ['blogs' => $blogs]);
    }
}
