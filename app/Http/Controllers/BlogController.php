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

    /**
     * ブログ詳細を表示する
     * @param Request $request
     * @param int $id
     */
    public function showDetail($id, Request $request)
    {
        $blog = Blog::find($id);

        if(is_null($blog)){
            $request->session()->flash('err_msg', 'データがありません');
            return redirect(route('blogs'));
        }
        return view('blog.detail', ['blog' => $blog]);
    }
}
