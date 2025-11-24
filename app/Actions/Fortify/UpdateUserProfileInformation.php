<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    public function update($user, array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255'],
        ])->validate();

        $user->forceFill([
            'username' => $input['username'],
        ])->save();
    }
}
