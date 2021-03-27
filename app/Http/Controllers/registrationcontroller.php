<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userlist;
use Validator;

use App\Http\Requests\registrationRequest;

class registrationcontroller extends Controller
{
    public function registrationcreate(){
        return view('home.registration');


    }


        public function registrationstore(registrationRequest $req){


            // $validation = Validator::make($req->all(), [
            //     'username' => 'required|unique:userlist|bail',
            //     'password' => 'required|min:6',
            //     'email' => 'required',
            //     'fullname' => 'required',
            //     'nationality'=>'required'
            // ]);

            // if($validation->fails()){

            //      return Back()->with('errors', $validation->errors())->withInput();
            //    }

            //insert into DB or model...

            $user = new Userlist();
            $user->fullname   = $req->fullname;
            $user->username = $req->username;
            $user->password = $req->password;
            $user->email = $req->email;
           // $user->dept     = $req->dept;
            $user->nationality     = $req->nationality;
          // $user->profile_img     = '';

            $user->save();



            return redirect('/login');



    }
}
