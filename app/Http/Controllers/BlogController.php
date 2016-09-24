<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

use App\Http\Requests;

//use Illuminate\Support\Facades\DB;

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
        $blog = Blog::create($data);
        return $blog;
    }

    public function all()
    {
        $allBlog = Blog::latest()->get();
        Blog::addLink($allBlog);
        return $allBlog;
    }

    public function show($Y = null, $m = null, $d = null, $linktitle = null)
    {
        $blogs = Blog::Y($Y)->m($m)->d($d)->linktitle($linktitle)->latest()->get();
        Blog::addLink($blogs);
        return $blogs;
    }
}
