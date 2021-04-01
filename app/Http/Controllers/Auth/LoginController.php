<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\pixelbox;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\File;
use Auth;
use Session;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*
     --- SOCIAL LOGIN REDIRECTION
    */

    // -- Google
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    
    // -- Facebook
    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }


    /*
    --  SOCIAL LOGIN CALLBACK HANDLE
    */
    // -- google
    public function handleGoogleCallback(){
        $user = Socialite::driver('google')->user();
        $this->_registerOrLoginUser($user);

        return redirect()->route('welcome');
    }

    //-- Facebook
    public function handleFacebookCallback(){
        $user = Socialite::driver('facebook')->user();
        $this->_registerOrLoginUser($user,true);

        return redirect('/');
    }


    /**
     * Login Register Handler for social logins
     */
    protected function _registerOrLoginUser($data,$isFacebook=false){
        $user = User::where('email', '=', $data->email)->first();
        $boxId = Session::get('selectedPixelId');
        if(!$user){
            $user = new User();
        }else{
            // -- remove old image avatar - server optimization
            unlink(public_path($user->avatar));
        }
        
        // -- Make Avatar URL
        if($isFacebook){
            $avatarUrl = $data->avatar . '&access_token=' . $data->token;
        }else{
            $avatarUrl = $data->avatar;
        }

        // -- set User Attributes
        $user->name = $data->name;
        $user->email = $data->email;
        $user->provider_id = $data->id;
        $user->provider_token = $data->token;
        $user->provider_name = ($isFacebook) ? "Facebook" : "Google";

        //-- get location data and Assign
        // user IP or Google Default
        // $ip = (strlen($this->get_client_ip()) > 4) ? $this->get_client_ip() : '8.8.8.8';
        // $locationData = file_get_contents('https://api.ipgeolocation.io/ipgeo?apiKey=f56918ccce9d46f5a2ac406e65e48d8f&fields=country_flag,city,state_prov,country_capital,country_name,country_code2,zipcode,latitude,longitude');
        $user->location_data = "--";//$locationData;

        // -- Save Avatar to server
        $path = 'socialLoginAvatar/'.$data->id.'_'.time().'.jpg';
        @file_put_contents(public_path($path),file_get_contents($avatarUrl));
        $user->avatar = $path;
        $user->save();
        
        // -- Create New Pixel Linking
        $pixel = new pixelbox();
        $pixel->boxid = $boxId;
        $pixel->userid = $user->id;
        // -- get Country ID prefix
        $pixel->country_id = trim(file_get_contents('https://ipinfo.io/country'));
        $pixel->save();

        Session::forget('selectedPixelId');
        // return redirect()->route('welcome');
        //Auth::login($user);
    }

    protected function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
}
