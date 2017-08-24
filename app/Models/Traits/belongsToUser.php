<?php

namespace App\Models\Traits;

use App\Models\User;

trait belongsToUser
{
    public function user()
    {
        $user_primary_key = with(new User())->getKeyName();
        return $this->belongsTo(User::class, $user_primary_key, $user_primary_key);
    }
}