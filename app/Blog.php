<?php

namespace App;

use App\Scopes\AuthScope;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = ['user_id', 'Y', 'm', 'd', 'date', 'title', 'body'];

//    protected $hidden = ['linktitle'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new AuthScope);
    }

    public static function parseYmd($date)
    {

        return explode('-', str_replace('/', '-', $date));
    }


    public function scopeY($q, $Y = null)
    {
        return $Y ? $q->where(['Y' => $Y]) : $q;
    }

    public function scopeM($q, $m = null)
    {
        return $m ? $q->where(['m' => $m]) : $q;
    }

    public function scopeD($q, $d = null)
    {
        return $d ? $q->where(['d' => $d]) : $q;
    }

    public function scopeTitle($q, $title = null)
    {
        return $title ? $q->where('title', $title) : $q;
    }

    public function scopeLinktitle($q, $linktitle = null)
    {
        return $linktitle ? $q->where('linktitle', $linktitle) : $q;
    }

    static public function addLink(&$blogs)
    {
        foreach ($blogs as $blog) {
            $blog['link'] = url("blog/{$blog['Y']}/{$blog['m']}/{$blog['d']}/" . $blog->linktitle . "?id={$blog['id']}");
        }
        return $blogs;
    }

    public function getLinkAttribute()
    {
        return url("blog/{$this['Y']}/{$this['m']}/{$this['d']}/" . $this->linktitle . "?id={$this['id']}");
    }

//    public function makeLinkTitle()
//    {
//        $this->linktitle = $this->linktitle();
//    }
//
//    public function linktitle()
//    {
//        return str_replace([' ', '/', '?', '=', '&', '\\'], '-', $this->title); // Replaces all spaces with hyphens.
//    }

    public function getLinktitleAttribute()
    {
        return str_replace([' ', '/', '?', '=', '&', '\\', '#'], '-', $this->title); // Replaces all spaces with hyphens.
    }
}
