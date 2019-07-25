<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use Carbon\Carbon;
use Session;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // view all message
    public function index(){
        $all=Contact::where('contact_status',1)->orderBy('contact_id','DESC')->get();
        return view('admin.contact_message.all_mail',compact('all'));
    }

    public function Message_details($id){
        $data=Contact::where('contact_status',1)->where('contact_slug',$id)->firstOrFail();
        return view('admin.contact_message.view',compact('data'));
        // return view('admin.contact_message.view');
    }

    //permenent delete single data
    public function delete($id){
        Contact::where('contact_id',$id)->delete();
        return redirect('/admin/message')->with("success",'message deleted successfully');
    }

    // permenent delete multiple data
    public function delete_multiple(Request $request){
        $delete = $request->input('delete_multiple');
        Contact::whereIn('contact_id',$delete)->delete();
        return redirect('/admin/message')->with('success','product deleted successfully');
    }

    // soft delete data
    public function soft_delete_multiple(Request $request){
        $delete = $request->input('delete_multiple');
        Contact::whereIn('contact_id',$delete)->update([
            'contact_status'=>0,
            'updated_at'=>Carbon::now()->toDateTimeString()
        ]);
        return redirect('/admin/message')->with('sucee','product deleted successfully');
    }

    // view all trash
    public function trash(){
        $all=Contact::where('contact_status',0)->orderBy('contact_id','DESC')->get();
        return view('admin.contact_message.all_trash',compact('all'));
    }

}
