<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $fillable = ['Y', 'm', 'd', 'date', 'title', 'linktitle', 'body'];
    protected $hidden = ['linktitle'];

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

    static public function addLink($blogs)
    {
        foreach ($blogs as $blog) {
            $blog['link'] = url("blog/{$blog['Y']}/{$blog['m']}/{$blog['d']}/{$blog['linktitle']}");
        }
        return $blogs;
    }

    public function makeLinkTitle()
    {
        $this->linktitle = str_replace(' ', '-', $this->title);
    }
}
