<?php

namespace App\Models\Traits;

use App\Models\User;

trait BelongsToUser
{
    public function user()
    {
        static $user_primary_key;
        $user_primary_key = $user_primary_key ?? with(new User())->getKeyName();
        return $this->belongsTo(User::class, $user_primary_key, $user_primary_key);
    }
}