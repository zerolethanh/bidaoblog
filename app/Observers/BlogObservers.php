<?php
/**
 * User: ZE
 * Date: 2016/09/24
 * Time: 17:07
 */

namespace App\Observers;


use App\Blog;

class BlogObservers
{
    public function created(Blog $blog)
    {

    }

//    public function saved(Blog $blog)
//    {
//        $blog->makeLinkTitle();
//    }
    public function saving(Blog $blog)
    {
//        $blog->makeLinkTitle();
    }

    public function creating(Blog $blog)
    {
    }
}