<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function googleRedirect(){
        return Socialite::driver('google')->redirect();
    }
    
    public function googleCallback(){
        $user = Socialite::driver('google')->user();
        $this->createOrUpdateUser($user,'google');
        return redirect('/');
    }

    public function createOrUpdateUser($data, $provider){
        $user = User::where('email',$data->email)->first();

        if($user){
            $user->update([
                'provider' => $provider,
                'provider_id' => $data->id,
                'avatar' => $data->avatar,
            ]);
        }else{
            $user=User::create([
                'name'=> $data->name,
                'email'=> $data->email,
                'provider'=> $provider,
                'provider_id'=> $data->id,
                'avatar'=> $data->avatar,
            ]);
        }

        session()->put("googleuser", $data->name);

       Auth::login($user);

    }
}
