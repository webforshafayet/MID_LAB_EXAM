<?php

namespace App\Http\Controllers;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use App\Http\Requests\userlisrtequest;
use Validator;
use App\Models\Userlist;

class userlistcontroller extends Controller
{
      // userlist--------------------------------------------------------------------------------------------

      public function usershow($id){

        $user = Userlist::find($id);
        //print_r($user);
        return view('home.userdetails')->with('user', $user);
    }

    public function usercreate(){

        return view('home.usercreate');
    }



    //public function userstore(Request $req){

        public function userstore(userlisrtequest $req){

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
        $user->fullname     = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
       // $user->dept     = $req->dept;
        $user->nationality     = $req->nationality;
      // $user->profile_img     = '';

        $user->save();
       // echo $req->username;

       return redirect('/home/userlist');
       $userlist = $this->getUserlist();
       //return view('home.list')->with('list', $userlist);

    }


    public function useredit($id){

      //  return view('home.edit')->with('id', $id);
      //  $userlist= $this->getUserlist();
      $user = Userlist::find($id);
      return view('home.useredit')->with('user', $user);


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
    //         'username' => 'required|bail',
    //         'password' => 'required|min:6',
    //         'email' => 'required',
    //         'fullname' => 'required',
    //         'nationality'=>'required'
    //     ]);

    //     if($validation->fails()){

    //          return Back()->with('errors', $validation->errors())->withInput();
    //        }
    public function userupdate($id,userlisrtequest $req){

        //updating DB or model
        $user = Userlist::find($id);

        $user->fullname = $req->fullname;
        $user->username = $req->username;
        $user->password = $req->password;
        $user->email = $req->email;
       // $user->dept     = $req->dept;
        $user->nationality     = $req->nationality  ;
        $user->save();

        return redirect('/home/userlist');
    }
    public function userlist(){

        //return view('home.list');

        //---------------------------------------------- db model userlist------------------------------------------------

        // $userlist = [
        //     ['id'=>1, 'name'=>'shafayet', 'email'=> 'shafayet@aiub.edu', 'password'=>'123'],
        //     ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
        //     ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
        // ];

        $userlist = Userlist::all();
        //$userlist = $this->getUserlist();
        return view('home.userlist')->with('list', $userlist);

    }


    public function userlist_search(Request $req){

        $search=$req->input('search');
        $userlist=Userlist::query()
        ->where('username','LIKE',"%{$search}%")
        ->orwhere('email','LIKE',"%{$search}%")
        ->orwhere('fullname','LIKE',"%{$search}%")
        ->get();

        return view('home.userlist')->with('list', $userlist);
    }

    // public function getUserlist (){

    //     return [
    //             ['id'=>1, 'name'=>'alamin', 'email'=> 'alamin@aiub.edu', 'password'=>'123'],
    //             ['id'=>2, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'456'],
    //             ['id'=>3, 'name'=>'xyz', 'email'=> 'xyz@aiub.edu', 'password'=>'789']
    //         ];
    // }


    public function userdelete($id){

        $user = Userlist::find($id);
        return view('home.userdelete')->with('user', $user);
    }

    public function userdestroy($id){

        if(Userlist::destroy($id)){
            return redirect('/home/userlist');
        }else{
            return redirect('/home/userdelete/'.$id);
        }

    }
}
