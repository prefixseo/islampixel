<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pixelbox;
use App\Models\PixelRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Auth;


class AdminDashboard extends Controller
{
    // arehman.sattar@gmail.com
    function __construct(){
        $this->middleware(function ($request, $next) {
            if(Auth::user()->email !== 'admin@hellodearcode.com'){
                return redirect('/');
            }
    
            return $next($request);
        });
    }

    public function dashboard() {
        $userCount = User::all()->count();
        $chart = DB::select('select `country_id`, count(*) as y from pixelboxes group by `country_id` order by y desc');
        $pixelCount = pixelbox::all()->count();
        return view('design.admin.index',compact('userCount','chart','pixelCount'));
    }

    public function pixelsListing($countryId = false) {
        if($countryId){
            $pixels = pixelbox::where('country_id', '=', $countryId)->simplePaginate(10);
        }else{
            $pixels = pixelbox::simplePaginate(10);
        }
        return view('design.admin.pixels', compact('pixels'));
    }

    /**
     * 
     * REQUESTED Pixel Listing
     * START
     */

     public function requestedPixelListing($countryId = false) {
        if($countryId){
            $reqpixels = PixelRequest::where('country_id', '=', $countryId)->simplePaginate(10);
        }else{
            $reqpixels = PixelRequest::simplePaginate(10);
        }
        return view('design.admin.requestedpixels', compact('reqpixels'));
    }

    public function activeReqPixel($pxid){
        $reqpixel = PixelRequest::find($pxid);
        if($reqpixel !== null){
            $reqpixel->activated = 1;
            $reqpixel->update();
            session()->flash('msg', 'Requested Pixel Activated');
            return redirect('admin/requestedpixels');
        }

        return abort(404);
    }
    
    public function deactiveReqPixel($pxid){
        $reqpixel = PixelRequest::find($pxid);
        if($reqpixel !== null){
            $reqpixel->activated = 0;
            $reqpixel->update();
            session()->flash('error', 'Requested Pixel Deactivated');
            return redirect('admin/requestedpixels');
        }

        return abort(404);
    }

    public function destroyReqPixel($pxid) {
        PixelRequest::find($pxid)->delete();
        session()->flash('error', 'Pixel Request deleted');

        return redirect('admin/requestedpixels');
    }

     /**
      * Requested Pixel Listing END
      */

    public function userListing() {
        $users = User::simplePaginate(10);
        return view('design.admin.users',compact('users'));
    }

    public function destroyPixel(Request $request) {
        if($request->has('_box_id')){
            pixelbox::find($request->get('_box_id'))->delete();
        }
        session()->flash('msg', 'Pixel deleted');

        return redirect('admin/pixels');
    }


    public function createPixel(){
        return view('design.admin.createPixel');
    }

    public function createPixelStore(Request $request){
        $pixel = pixelbox::where('boxid', '=', $request->get('_box_id'))->first();
        if ($pixel === null) {

            $pixel = new pixelbox();
            $pixel->boxid = $request->get('_box_id');
            $pixel->country_id = $request->get('_country_id');
            $pixel->userid = $request->get('_user_id');
            $pixel->save();
            
            session()->flash('msg','Pixel ID# '.$request->get('_box_id').' is Assigned');
            return redirect('admin/pixels');
        }else{
            session()->flash('error','Pixel ID# '.$request->get('_box_id').' is already exist and Taken');
            return redirect('admin/pixels');
        }
    }
}
