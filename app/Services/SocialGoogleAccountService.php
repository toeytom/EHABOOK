<?php

namespace App\Services;
use App\SocialFacebookAccount;
use App\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialGoogleAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialFacebookAccount::whereProvider('google')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new SocialFacebookAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'google'
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getemail(),
                    'name' => $providerUser->getname(),
                    'surname' => '',
                    'password' => md5(rand(1,10000)),
                    'tel' => '',
                    'idcard' => '',
                    'profile_pic'=> $providerUser->getAvatar(),
                   
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}