<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use App\Models\Billing;
use App\Models\Booking;
use App\Models\Package;
use App\Models\Service;
use App\Models\TouristGuide;
use App\Policies\RolePolicy;
use App\Policies\UserPolicy;
use App\Policies\BillingPolicy;
use App\Policies\BookingPolicy;
use App\Policies\PackagePolicy;
use App\Policies\ServicePolicy;
use App\Policies\PermissionPolicy;
use Spatie\Permission\Models\Role;
use App\Policies\TouristGuidePolicy;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Permission::class   => PermissionPolicy::class,
        Role::class         => RolePolicy::class,
        User::class         => UserPolicy::class,
        Service::class      => ServicePolicy::class,
        Booking::class      => BookingPolicy::class,
        Billing::class      => BillingPolicy::class,
        Package::class      => PackagePolicy::class,
        TouristGuide::class => TouristGuidePolicy::class

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
