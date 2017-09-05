<?php

namespace App\Models\Traits;

use App\Models\User;

trait BelongsToUser
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        static $user_primary_key;
        $user_primary_key = $user_primary_key ?? with(new User())->getKeyName();
        return $this->belongsTo(User::class, $user_primary_key, $user_primary_key);
    }

    /**
     * @return User|null
     */
    public function getUser()
    {
        return $this->user;
    }
}