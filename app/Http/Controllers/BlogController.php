<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    public function write()
    {
        return view('blog.write');
    }

    public function save()
    {
        $blog = Blog::createFromRequest();
        return $this->showId($blog->id);
    }

    public function all($id = null)
    {
        if ($id) return $this->showId($id);
        $blogs = Blog::latest()->public()->simplePaginate();
        if (\request()->exists('api')) {
            return $blogs;
        }
        return view('blog.all', compact('blogs'));
    }

    public function show($Y = null, $m = null, $d = null, $title = null)
    {
        if ($id = request('id')) {
            $blog = Blog::findOrFail($id);
            return $this->showJsonIfAjax($blog) ?? view('blog.show2', compact('blog'));
        }
        return redirect('blogs');
    }

    public function showId($id)
    {
        $blog = Blog::findOrFail($id);
        return $this->showJsonIfAjax($blog) ?? view('blog.show2', compact('blog'));
    }

    public function showJsonIfAjax($blog)
    {
        if (IS_AJAX) {
            $blog->body = markdown($blog->body);
            return $blog;
        }
    }

    public function edit($id)
    {
        $blog = Blog::find($id);
        $this->authorize('edit', $blog);
//        return $blog;
        return view('blog.edit', compact('blog'));
    }

    public function edit_save($id)
    {
        list($Y, $m, $d) = Blog::parseYmd(request('date'));
        $data = array_merge(request()->all(), compact('Y', 'm', 'd'));

        Blog::findOrFail($id)->update($data);
        return redirect("blog/$id");
    }
}
