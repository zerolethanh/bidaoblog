<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomePageController extends Controller
{

    static $homepage = 'homepage';

    public function view($view = 'index')
    {
        return $this->showView($view);
    }

    public function showView($view)
    {
        return view(static::$homepage.'.'.$view);
    }
}
