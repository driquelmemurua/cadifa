<?php

namespace App;

use Laravel\Socialite\Contracts\User as ProviderUser;

class AuthService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $user = User::where('id', $providerUser->getId())->first();

        if ($user) {
            $blogger = Blogger::where('id', $providerUser->getId())->first();
            if($blogger)
            {
                return $blogger;
            }
            return $user;
        } else {

            $user = new User([
                'id' => $providerUser->getId(),
                'name' => $providerUser->getName(),
                'avatar_route' => $providerUser->getAvatar()
            ]);

            $user->save();
            return $user;
        }
    }
}