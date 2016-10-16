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
        $data = array_merge(
            request()->all(),
            compact('Y', 'm', 'd'),
            ['user_id' => Auth::id()]
        );
        Blog::create($data);
        return back();
    }

    public function all()
    {
        $blogs = Blog::latest()->simplePaginate();
        return view('blog.all', compact('blogs'));
    }

    public function show($Y = null, $m = null, $d = null, $title = null)
    {
        if ($id = request('id')) {
            $blog = Blog::find($id);
            return view('blog.show2', compact('blog'));
        }
        return redirect('blogs');

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
        dd($data);

        Blog::findOrFail($id)->update($data);
        return redirect('blogs');
    }
}
