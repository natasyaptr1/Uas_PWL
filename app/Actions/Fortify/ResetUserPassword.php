<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Contracts\ResetsUserPasswords;

class ResetUserPassword implements ResetsUserPasswords
{
    public function reset($user, array $input)
    {
        $user->forceFill([
            'password' => Hash::make($input['password']),
        ])->save();
    }
}
