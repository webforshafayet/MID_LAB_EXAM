<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\Admin;
use App\Http\Requests\adminprofileRequest;

class adminprofileController extends Controller
{

    public function admin_profile_show(){

        $userlist = Admin::all();
        return view('home.admin_profile')->with('list', $userlist);
    }

    public function admin_profile_edit($id){
        $user = Admin::find($id);
        return view('home.admin_profile_edit')->with('user', $user);
      }

      public function admin_profile_update($id, adminprofileRequest $req){

        //   $validation = Validator::make($req->all(), [
        //     'username' => 'required|unique:userlist|bail',
        //     'password' => 'required|min:6',
        //     'email' => 'required',
        //     'fullname' => 'required',
        //     'address' => 'required',
        //     'nationality'=>'required'
        // ]);

        // if($validation->fails()){

        //      return Back()->with('errors', $validation->errors())->withInput();
        //    }
          $user = Admin::find($id);

          $user->fullname = $req->fullname;
          $user->username = $req->username;
          $user->password = $req->password;
          $user->address = $req->address;
          $user->email = $req->email;


         // $user->dept     = $req->dept;
          $user->nationality     = $req->nationality  ;
          $user->save();

          return redirect('/home/admin_profile');
      }



}
