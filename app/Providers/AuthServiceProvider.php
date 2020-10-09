<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\UserPermission;
class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        /* define a admin user role */
        Gate::define('manage_category', function($user) {
         
            $per=UserPermission::whereHas('permission', function($query) {
                $query->where('code', 'mg_category');
             })->where('user_id',$user->id)->get();
             dd($per);
            return $per!=null?true:false;
         });
         
         Gate::define('manage_item', function($user) {
            //  $userpermission= UserPermission::where(['user_id'=>$user->id])->get();
           //  dd($userpermission);
              $per=UserPermission::whereHas('permission', function($query) {
                  $query->where('code', 'mg_item');
               })->where('user_id',$user->id)->get();
             //  dd($per);
              return $per!=null?true:false;
           });
        //
    }
}
