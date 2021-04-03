<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pixelbox;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function contactUsSubmittion(Request $request)
    {
        $ch = curl_init();
        $data = array(
            'personalizations' => [
                [
                    "to" => [
                        [
                            "email" => "y9f9831xyx@happy-new-year.top"
                        ]
                    ],
                    "subject" => "Pixel Islam [Contact-Form]: ". $request->get('ipx-subject'),
                ]
            ],
            'from' => [
                'email' => 'no-reply@prepostseo.com',
                'name' => 'IslamPixel_dev'
            ],
            'content' => [
                [
                    "type" => "text/html",
                    "value" => "Contact us form Query by <strong>".$request->get('ipx-username')." (".$request->get('ipx-email').")</strong><br><hr><br><p>".$request->get('ipx-message')."</p><br><small>Message body end</small>"
                ]
            ]
        );

        curl_setopt_array($ch, array(
            CURLOPT_URL => "https://api.sendgrid.com/v3/mail/send",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                "authorization: Bearer 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",
                "content-type: application/json"
            ),
        ));
        
        // $rest = curl_exec($ch);
        curl_exec($ch);
        curl_close($ch);
        
        session()->flash('msg','Thankyou for contact us, Soon we will approach you');
        return redirect()->back();
    }

    // -- welcome
    public function welcome(){
        $pixels = pixelbox::select('boxid','country_id')->get()->toArray();

        $boxIDs = array();
        $country_ids = array();

        if($pixels !== null){
            foreach($pixels as $v){
                array_push($boxIDs, trim($v['boxid']));
                array_push($country_ids, trim($v['country_id']));
            }
        }
        return view('welcome', compact('boxIDs','country_ids'));
    }


    public function newHome(){
        $pixels = pixelbox::select('boxid','country_id')->get()->toArray();

        $popular = DB::select('select `country_id`, count(*) as cnt from pixelboxes group by `country_id` order by cnt desc limit 5');

        $boxIDs = array();
        $country_ids = array();

        if($pixels !== null){
            foreach($pixels as $v){
                array_push($boxIDs, trim($v['boxid']));
                array_push($country_ids, trim($v['country_id']));
            }
        }
        return view('design.index', compact('boxIDs','country_ids','popular'));
    }

    // -- Save box id as session and redirect for login
    public function boxSessionManager(Request $request){
        Session::put('selectedPixelId', $request->get('pixelId'));

        if($request->has('facebook')){
            return redirect()->route('login.facebook');
        }elseif($request->has('google')){
            return redirect()->route('login.google');
        }else{
            return redirect()->route('welcome');
        }
    }


    // -- return profile with Pixel id
    public function profileWithPixelId(Request $request){
        if($request->has('pixel')){
            $userId = pixelbox::where('boxid',$request->get('pixel'))->first();
            $user = User::where('id',$userId->userid)->first();
            $html = '
            <img src="'. asset($user->avatar) .'" alt="avatar profile" class="mb-3 rounded-circle"/>
            <h4>'. $user->name .'</h4>
            <p>'. $user->email .'</p>
            <p><small><em>Pixel owned using '. $user->provider_name .' profile</em></small></p>';
            
            echo $html;
        }
    }


    // -- get profile info by ajax
    public function getProfilebyPixel(Request $request)
    {
        if($request->has('pixel')){
            $userId = pixelbox::where('boxid',$request->get('pixel'))->first();
            $user = User::where('id',$userId->userid)->first();
            $html = '
                <div>
                    <p>PROFILE</p>
                </div>
                <div>
                    <div style="background: url('.asset($user->avatar).');" class="ipx-profile-img"></div>
                </div>
                <div>
                    <h3>'.$user->name.'</h3>
                </div>
                <div>
                    <i class="fflag fflag-'.$userId->country_id.' ff-md"></i>&nbsp; '.$userId->country_id.'
                </div>
            ';
            
            echo $html;
        }
    }
}
