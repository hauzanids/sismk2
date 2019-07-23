<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('isStaff', function($user){
            return $user->user_type == 'staff';
        });

        $gate->define('isGuru', function($user){
            return $user->user_type == 'guru';
        });

        $gate->define('isMurid1', function($user){
            return $user->user_type == 'murid1';
        });

        $gate->define('isMurid2', function($user){
            return $user->user_type == 'murid2';
        });

        $gate->define('isMurid3', function($user){
            return $user->user_type == 'murid3';
        });
    }
}
