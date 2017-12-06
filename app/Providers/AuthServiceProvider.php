<?php

namespace App\Providers;

// use App\Event;
// use App\User;
// use App\EventPolicy;
// use App\UserPolicy;
use Illuminate\Support\Facades\Gate;
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
        'App\Event' => 'App\Policies\EventPolicy',
        'App\User' => 'App\Policies\UserPolicy',
        // User::class => UserPolicy::class,
        // Event::class => EventPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
