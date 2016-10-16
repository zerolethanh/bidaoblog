<?php

namespace App\Policies;

use App\Blog;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BlogPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function edit(User $user, Blog $blog)
    {
        return (int)$user->id === (int)$blog->user_id;
    }
}
