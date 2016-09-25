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
        Blog::create($data);
        return back();
    }

    public function all()
    {

        $blogs = \App\Blog::latest()
            ->simplePaginate();

//        dd($blogs);
        return view('blog.all', compact('blogs'));
    }

    public function show($Y = null, $m = null, $d = null, $linktitle = null)
    {

        if ($id = request('id')) {
            $blog = Blog::find($id);
        }
        return view('blog.show2', compact('blog'));
//        else {
//
//            $blogs = Blog::Y($Y)->m($m)->d($d)->linktitle($linktitle)
//                ->latest();
//
//            if (isset($linktitle)) {
//                $blogs = $blogs->get();
//            } else {
//                $blogs = $blogs->simplePaginate();
//            }
//            Blog::addLink($blogs);
//            return $blogs;
//        }
    }
}
