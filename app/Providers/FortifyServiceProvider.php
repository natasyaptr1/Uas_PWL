<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

// ACTIONS
use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\UpdateUserProfileInformation;

class FortifyServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // REGISTER USER
        Fortify::createUsersUsing(CreateNewUser::class);

        // UPDATE PROFILE
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);

        // LOGIN VIEW
        Fortify::loginView(function () {
            return view('auth.login');
        });

        // REGISTER VIEW
        Fortify::registerView(function () {
            return view('auth.register');
        });
    }
}
