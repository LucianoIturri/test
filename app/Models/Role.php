<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public static function roles()
    {
        return Role::orderBy('id','DESC')->get();
    }
}
