<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['user_id','permission_id'];
}
