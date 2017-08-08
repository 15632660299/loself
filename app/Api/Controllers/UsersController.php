<?php

namespace App\Api\Controllers;

use Illuminate\Http\Request;

class UsersController extends BaseController
{
    public function me(Request $request)
    {
        return $request->user();
    }
}
