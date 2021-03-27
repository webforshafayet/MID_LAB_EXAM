<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\modaratoruserlistRequest;
use Validator;
use App\Models\modaratoruserlist;

class modaratoruserlistcontroller  extends Controller
{
    public function modaratorusershow($id){

        $user = modaratoruserlist::find($id);

        return view('home.modaratoruserdetails')->with('user', $user);
    }

    public function modaratorusercreate(){

        return view('home.modaratorusercreate');
    }



    //public function userstore(Request $req){

        public function modaratoruserstore(modaratoruserlistRequest $req){

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

        $user = new modaratoruserlist();

        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
       // $user->dept     = $req->dept;
        $user->nationality     = $req->nationality;
      // $user->profile_img     = '';

        $user->save();
       // echo $req->username;

       return redirect('/home/modaratoruserlist');
       $userlist = $this->getUserlist();
       //return view('home.list')->with('list', $userlist);

    }


    public function modaratoruseredit($id){

      //  return view('home.edit')->with('id', $id);
      //  $userlist= $this->getUserlist();
      $user = modaratoruserlist::find($id);
      return view('home.modaratoruseredit')->with('user', $user);


        // foreach($userlist as $u){
        //     if($u['id'] == $id ){
        //         $user = $u;
        //         break;
        //     }
        // }

       // return view('home.edit')->with('id',$id);
       //$user =  ['id'=>2, 'username'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'];
        //return view('home.edit')->with('user', $user);
    }

    // public function userupdate($id, Request $req){

    //     $validation = Validator::make($req->all(), [

    public function modaratoruserupdate($id,modaratoruserlistRequest $req){

        //updating DB or model
        $user = modaratoruserlist::find($id);


        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
       // $user->dept     = $req->dept;
        $user->nationality     = $req->nationality  ;
        $user->save();

        return redirect('/home/modaratoruserlist');
    }
    public function modaratoruserlist(){



        $userlist = modaratoruserlist::all();
        //$userlist = $this->getUserlist();
        return view('home.modaratoruserlist')->with('list', $userlist);

    }


    public function modaratoruserlist_search(Request $req){

        $search=$req->input('search');
        $userlist=modaratoruserlist::query()
        ->where('username','LIKE',"%{$search}%")
        ->orwhere('email','LIKE',"%{$search}%")
        ->orwhere('fullname','LIKE',"%{$search}%")
        ->get();

        return view('home.modaratoruserlist')->with('list', $userlist);
    }




    public function modaratoruserdelete($id){

        $user = modaratoruserlistuserlist::find($id);
        return view('home.modaratoruserdelete')->with('user', $user);
    }

    public function modaratoruserdestroy($id){

        if(modaratoruserlist::destroy($id)){
            return redirect('/home/modaratoruserlist');
        }else{
            return redirect('/home/modaratoruserdelete/'.$id);
        }

    }
}
