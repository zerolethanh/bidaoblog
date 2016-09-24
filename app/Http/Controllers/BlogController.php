<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    /*
     * new blog
     */
    public function write()
    {
        return view('blog.write');
    }

    public function save()
    {
        list($Y, $m, $d) = Blog::parseYmd(request('date'));
        $data = array_merge(request()->all(), compact('Y', 'm', 'd'));
        return Blog::create($data);
    }

    public function all()
    {
        $allBlog = Blog::all();
        return $allBlog;
    }
}
