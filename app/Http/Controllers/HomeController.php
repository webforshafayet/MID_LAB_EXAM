<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name;
use Illuminate\Http\Request;
 use App\Models\Userlist;
use App\Models\Product;
use Validator;
use App\Http\Requests\UserRequest;
use App\Models\transictiontable;



class HomeController extends Controller
{
    public function index(Request $req){





        $name="shafayet";
        $id="12";


        if($req->session()->has('username')){                   // page sequre unauthorized access
            return view('home.index', compact('id', 'name'));
        }else{
            $req->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }

    }



    // public function registrationcreate(){
    //     return view('home.registration');


    // }


    //     public function registrationstore(Request $req){


    //         $validation = Validator::make($req->all(), [
    //             'username' => 'required|unique:userlist|bail',
    //             'password' => 'required|min:6',
    //             'email' => 'required',
    //             'fullname' => 'required',
    //             'nationality'=>'required'
    //         ]);

    //         if($validation->fails()){

    //              return Back()->with('errors', $validation->errors())->withInput();
    //            }

    //         //insert into DB or model...

    //         $user = new Userlist();
    //         $user->fullname   = $req->fullname;
    //         $user->username = $req->username;
    //         $user->password = $req->password;
    //         $user->email = $req->email;
    //        // $user->dept     = $req->dept;
    //         $user->nationality     = $req->nationality;
    //       // $user->profile_img     = '';

    //         $user->save();



    //         return redirect('/login');



    // }



}
