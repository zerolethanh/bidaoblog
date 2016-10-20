<?php
/**
 * User: ZE
 * Date: 2016/10/21
 * Time: 1:06
 */
namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
//use Illuminate\Support\Facades\Auth;

class BlogScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        return $builder->orWhere('scope', 1);
    }
}