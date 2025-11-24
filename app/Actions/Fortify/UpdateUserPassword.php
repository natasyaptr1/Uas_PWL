<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Contracts\UpdatesUserPasswords;

class UpdateUserPassword implements UpdatesUserPasswords
{
    public function update($user, array $input)
    {
        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
