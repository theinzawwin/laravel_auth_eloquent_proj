<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['user_id','permission_id'];
    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function permission(){
        return $this->belongsTo('App\Permission','permission_id');
    }
}
