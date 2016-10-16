<?php
/**
 * User: ZE
 * Date: 2016/10/14
 * Time: 2:19
 */

namespace App\Scopes;

use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class AuthScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        $builder->where('user_id', Auth::id());
    }
}