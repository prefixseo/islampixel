<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PixelRequest;
use App\Models\User;
use Auth;
use Session;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Hash;
use Image;


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
    public function index($id=false)
    {
        if($id){
            $user = User::findorfail($id);
        }elseif(Auth::check()){
            $user = Auth::user();
        }else{
            abort(405);
        }
        return view('design.profile', compact('user'));
    }

    public function doughnutChartStats(){
        $chart = DB::select('select `country_id`, count(*) as y from pixel_requests group by `country_id` order by y desc');
        return view('design.doughnut-stats', compact('chart'));
    }

    public function allReadersListing(){
        $pixels = PixelRequest::select('boxid','emoji_name','weburl','userid')->where('activated',1)->paginate(20);
        return view('design.all-readers', compact('pixels'));
    }

    /**
     * Edit Profile START
     */

     public function edit($id){
        if($id == Auth::user()->id){
            $user = User::findorfail($id);
            return view('design.editprofile', compact('user'));
        }

        abort(403);
     }

     public function update(Request $request, $id){
        if($request->get('ipx-password') === $request->get('ipx-cpassword')){
            User::find($id)->update(['password'=> Hash::make($request->get('ipx-password'))]);
            session()->flash('msg', 'Success: Password Updated');
            return redirect('/profile/'.$id.'/edit');
        }

        return response()->json([
            'message' => 'Both Passwords Not Same'
        ], 422);
     }


     public function updateAvatar(Request $request,$id){

        if($request->hasFile('ipx-new-avatar')) {

            $image       = $request->file('ipx-new-avatar');
            $pathInfo    = pathinfo($image->getClientOriginalName());
            $fileName    = time() . '.' .$pathInfo['extension'];
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->fit(138);
            $image_resize->save(public_path('socialLoginAvatar/' . $fileName));

            $user = User::find($id);
            unlink(public_path($user->avatar));
            $user->avatar = 'socialLoginAvatar/' . $fileName;
            $user->save();

            return redirect('/profile');
        }

        return abort(500);
    }


    public function updateSocialAccounts(Request $request,$id){
        $user = User::find($id);
        $user->social_fb = trim($request->get('ipx-fb'));
        $user->social_insta = trim($request->get('ipx-insta'));
        $user->social_yt = trim($request->get('ipx-yt'));
        $user->social_twt = trim($request->get('ipx-twt'));
        $user->social_github = trim($request->get('ipx-github'));
        $user->social_lin = trim($request->get('ipx-lin'));
        $user->save();
        return redirect('/profile');
    }

    /**
     * Edit Profile END
     */

    public function contactUsSubmittion(Request $request)
    {
        $ch = curl_init();
        $data = array(
            'personalizations' => [
                [
                    "to" => [
                        [
                            "email" => "developerenzipe@gmail.com"
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


    // -- ---------------- NEW PIXEL REUEST SELECTION START----------------
    public function darudListenedPingbackCallback(Request $request){
        if($request->has('pixel')){
            Session::put('pixel', $request->get('pixel'));
            return Session::get('pixel');
        }
        return 0;
        exit;
    }


    public function pixelRequestIndex(){
        $pixels = PixelRequest::select('boxid','emoji_name')->get()->toArray();

        $popular = DB::select('select `country_id`, count(*) as cnt from pixel_requests group by `country_id` order by cnt desc limit 5');


        $boxIDs = array();
        $emoji_name = array();

        if($pixels !== null){
            foreach($pixels as $v){
                array_push($boxIDs, trim($v['boxid']));
                array_push($emoji_name, trim($v['emoji_name']));
            }
        }

        return view('design.pixelRequest-index', compact('popular','boxIDs','emoji_name'));
    }


    public function objectChoice($box_id){
        if(isset($box_id) && Session::exists('pixel') && Session::get('pixel') == $box_id){
            $pixel = is_numeric($box_id) ? trim(intval($box_id)) : null;
            if($pixel != null){
                return view( 'design.objectSelection', compact('pixel'));
            }
        }
        abort(403,'Must Listen Darood Pak');
    }

    public function uploadCustomEmoji(Request $request){

        if($request->hasFile('_ipx_custom_emoji')) {

            $image       = $request->file('_ipx_custom_emoji');
            $pathInfo    = pathinfo($image->getClientOriginalName());
            $fileName    = time() . '.' .$pathInfo['extension'];
        
            $image_resize = Image::make($image->getRealPath());              
            $image_resize->resize(20, 20);
            $image_resize->save(public_path('emojis/' . $fileName));

            return redirect('/picked-pixel/'.$request->get('_pixel_id'). '/' . $fileName);
        }

        return abort(500);
    }


    public function getUserDetails($boxid,$emoji_name){
        if(isset($boxid) && Session::exists('pixel') && Session::get('pixel') == $boxid){
            Session::forget('pixel');
            return view( 'design.get_user_details', compact('boxid','emoji_name'));
        }
        abort(403);
    }

    public function savePixelRequestWithUserDetails(Request $request){
        if(!Auth::check()){
            return response()->json([
                'message' => 'Loggedin users can perform this action'
            ], 401);
        }

        $reqested_pixel = $request->get('ipx-boxid');
        $userPixels = PixelRequest::where('userid','=',Auth::user()->id)->count();
        if($userPixels != 0){
            return response()->json([
                'message' => 'Only one Pixel Per User (You already Registered Pixel)'
            ], 403);
        }

        $check = PixelRequest::where('boxid','=',$reqested_pixel)->count();
        if($check == 0){
            $pixelRequest = new PixelRequest();
            $pixelRequest->boxid = $reqested_pixel;
            $pixelRequest->emoji_name = $request->get('ipx-emoji_name');
            $pixelRequest->weburl = $request->get('ipx-weburl');
            $pixelRequest->title = $request->get('ipx-title');
            $pixelRequest->email = $request->get('ipx-email');
            $pixelRequest->country_id = $request->get('ipx-country_id');
            $pixelRequest->activated = 0;
            $pixelRequest->userid = Auth::user()->id;
            $pixelRequest->save();

            session()->flash('msg','Your Pixel Request Submitted<br>Soon we will approach you in order to active your Pixel');
            return redirect('/');
        }else{
            abort(response('Requested Pixel Already Registered <a href="'.url('/').'">Go Home</a>', 409 ));
        }
    }

    public function requestedPixelStatus(Request $request){
        if($request->has('pixel')){
            $check = PixelRequest::select('weburl')
                ->where('boxid','=',$request->get('pixel'))
                ->where('activated','=',1)
                ->first();
            if($check !== null){
                echo json_encode($check);
            }else{
                echo 'deactive';
            }
        }
        exit;
    }

    // ------------------------ PIXEL REQUEST FORM END ---------------------------

}
