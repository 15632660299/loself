<?php

namespace App\Models\Base;

use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Notifications\Notifiable;

class BaseUserModel extends BaseModel implements
    AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    use Notifiable;
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * Let the passport find the user
     *
     * @param $username
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findForPassport($username)
    {
        return static::where('name', $username)->orWhere('email', $username)->first();
    }
}
