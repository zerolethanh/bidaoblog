<?php
/**
 * User: ZE
 * Date: 2016/09/24
 * Time: 17:05
 */

namespace App\Observers;


use App\User;

class UserObservers
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
        //
    }

    /**
     * Listen to the User deleting event.
     *
     * @param  User  $user
     * @return void
     */
    public function deleting(User $user)
    {
        //
    }
}