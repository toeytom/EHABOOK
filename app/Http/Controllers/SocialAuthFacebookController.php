<?php

// SocialAuthFacebookController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Services\SocialFacebookAccountService;
use App\Services\SocialGoogleAccountService;
use App\Services\SocialTwitterAccountService;

class SocialAuthFacebookController extends Controller
{
  /**
   * Create a redirect method to facebook api.
   *
   * @return void
   */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function redirectg()
    {
        return Socialite::driver('google')->redirect();
    }
    public function redirectt()
    {
        return Socialite::driver('twitter')->redirect();
    }

    /**
     * Return a callback method from facebook api.
     *
     * @return callback URL from facebook
     */
    public function callback(SocialFacebookAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
        auth()->login($user);
        return redirect()->to('/home');
    }
    public function callbackg(SocialGoogleAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('google')->user());
        auth()->login($user);
        return redirect()->to('/home');
    }
    public function callbackt(SocialTwitterAccountService $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('twitter')->user());
        auth()->login($user);
        return redirect()->to('/home');
    }
}
