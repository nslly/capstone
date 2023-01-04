<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Foundation\Vite;
use Spatie\Permission\Models\User;
use Filament\Navigation\UserMenuItem;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;
use App\Filament\Resources\UserResource;
use Filament\Navigation\NavigationBuilder;

class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function() {

            Filament::registerViteTheme('resources/css/filament.css');

            if(auth()->user()) {
                if(auth()->user()->is_admin == 1 && auth()->user()->hasRole(['admin', 'staff']) ) {
                    Filament::registerUserMenuItems([
                        'account' => UserMenuItem::make()->url(UserResource::getUrl()),
                    ]);
                }
            }
        });
        
    }
}
