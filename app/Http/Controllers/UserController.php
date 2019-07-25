<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){
        // $all=User::all();
        $all=User::orderBy('id','DESC')->get();
        return view('admin.user.all',compact('all'));
    }

    public function view(){

    }

    public function update(){

    }

    public function delete(){

    }

    // public function index(){}
}
