<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = ['Y', 'm', 'd', 'date', 'title', 'body'];

    public static function parseYmd($date)
    {
        return explode('-', str_replace('/', '-', $date));
    }
}
