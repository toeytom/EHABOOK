<?php

namespace App\Services;
use App\SocialFacebookAccount;
use App\User;
use App\Users;
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
            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
               
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'user_name' => $providerUser->getname(),
                    'password' => md5(rand(1,10000)),
                    'user_phone' => '',
                    'user_ava'=> $providerUser->getAvatar(),
                    'user_level'=>'1',
                   
                ]);
            }
            $userdata=Users::where('email',$providerUser->getEmail())->first(); 
            $account = new SocialFacebookAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'google',
                'user_id'=>$userdata->id,
            ]);

           

           

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}