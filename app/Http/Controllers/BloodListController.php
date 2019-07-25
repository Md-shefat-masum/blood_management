<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blood_donner;
use Carbon\Carbon;
use Image;
use session;

class BloodListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all=blood_donner::where('donner_status',1)->orderBy('blood_group','ASC')->get();
        return view('admin.blood_donner.all',compact('all'));
    }

    public function add(){
        return view('admin.blood_donner.add-blood-donner');
    }

    public function add_donner(Request $request){
        $slug = 'donner'.uniqid(20);
        $temp_name = $_POST['name'];
        $insert = blood_donner::insert([
            'name' => $_POST['name'],
            'blood_group' => $_POST['blood_group'],
            'mobile_no' => $_POST['mobile_no'],
            'email' => $_POST['email'],
            'fb_address' => $_POST['fb_address'],
            'linkedin' => $_POST['linkedin'],
            'twitter' => $_POST['twitter'],
            'skype' => $_POST['skype'],
            'address' => $_POST['address'],
            'website' => $_POST['website'],
            'last_donnet' => $_POST['last_donnet'],
            'birth_date' => $_POST['birth_date'],
            'donner_image' => '',
            'slug' => $slug,
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('donner_image')){
            $image=$request->file('donner_image');
            $ImageName=$temp_name.'_'.$slug.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/blood-donner/'.$ImageName);
            blood_donner::where('slug',$slug)->update([
                'donner_image'=>$ImageName
            ]);
        }

        if($insert){
            // return view('website.home');
            return redirect()->route('view_donner',$slug);
        }else{
            echo " not success";
        }
    }

    // update donner
    public function update_donner_view(Request $request,$slug){
        $donner=blood_donner::where('slug',$slug)->firstOrFail();
        return view('admin.blood_donner.update-blood-donner',compact('donner'));
    }

    public function update_donner(Request $request,$slug){
        $temp_name = $_POST['name'];
        // dd($temp_name);
        $donner_upadate=blood_donner::where('slug',$slug)->update([
            'name' => $_POST['name'],
            'blood_group' => $_POST['blood_group'],
            'mobile_no' => $_POST['mobile_no'],
            'email' => $_POST['email'],
            'fb_address' => $_POST['fb_address'],
            'linkedin' => $_POST['linkedin'],
            'twitter' => $_POST['twitter'],
            'skype' => $_POST['skype'],
            'address' => $_POST['address'],
            'website' => $_POST['website'],
            'last_donnet' => $_POST['last_donnet'],
            'birth_date' => $_POST['birth_date'],
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($request->hasFile('donner_image')){
            $image=$request->file('donner_image');
            $ImageName=$temp_name.'_'.$slug.'_'.time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('uploads/blood-donner/'.$ImageName);
            blood_donner::where('slug',$slug)->update([
                'donner_image'=>$ImageName
            ]);
        }

        if($donner_upadate){
            return redirect()->route('view_donner',$slug);
        }
    }

    // view donner information
    public function view_donner(Request $request,$slug){

        $donner=blood_donner::where('slug',$slug)->firstOrFail();

        // spent months after donnet
        $end=Carbon::now();
        $start=Carbon::parse($donner->last_donnet);
        $length = $start->diffInDays($end);
        $length = number_format($length/30);
        // dd($end,$start,$length/30);

        // age count
        $end=Carbon::now();
        $start=Carbon::parse($donner->birth_date);
        $age = $start->diffInDays($end);
        $age = number_format($age/365);
        // dd($age);

        return view('admin.blood_donner.view',compact('donner','length','age'));
    }

    //soft delete donner
    public function soft_delete(Request $request,$slug){
        $soft=blood_donner::where('slug',$slug)->update([
            'donner_status'=>0,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            return redirect()->route('blood_list');
        }
    }

    //hard delete donner
    public function trash(){
        $all=blood_donner::where('donner_status',0)->get();
        return view('admin.blood_donner.all_deleted_donnor',compact('all'));
    }
    public function recycle_donner(Request $request,$slug){
        $soft=blood_donner::where('slug',$slug)->update([
            'donner_status'=>1,
            'updated_at' => Carbon::now()->toDateTimeString()
        ]);

        if($soft){
            return redirect()->route('donner_trash');
        }
    }
    public function hard_delete(Request $request,$slug){
        $hard=blood_donner::where('slug',$slug)->delete();
        if($hard){
            return redirect()->route('donner_trash');
        }
    }

}
