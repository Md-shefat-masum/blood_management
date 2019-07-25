<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\aboutme;
use Carbon\Carbon;
use session;

class WebsiteController extends Controller
{
    public function __construct(){

    }

    // each function for each single page

    public function index(){
        $aboutme=aboutme::FirstOrFail();
        return view('website.home',compact('aboutme'));
    }

    public function about(){

    }

    public function gallery(){

    }

    public function contact_submit(Request $request){
        $slug = 'Vm'.uniqid(25);
        $insert = Contact::insert([
            'contact_name'=>$_POST['names'],
            'contact_email'=>$_POST['email'],
            'contact_subject'=>$_POST['subject'],
            'contact_message'=>$_POST['message'],
            'contact_slug'=>$slug,
            // 'created_at' => Carbon::now('Asia/Dhaka')->toDateTimeString() //config->app utc=Asia/Dhaka
            'created_at' => Carbon::now()->toDateTimeString()
        ]);

        if($insert){
            // return view('website.home');
            return redirect('/');
        }else{
            echo " not success";
        }
    }

}
