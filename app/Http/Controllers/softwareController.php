<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\softwarelist;
use App\Http\Requests\softwareRequest;

class softwareController extends Controller
{
    public function productshow($id){

        $user = softwarelist::find($id);
        //print_r($user);
        return view('home.softwaredetails')->with('user', $user);
    }




    public function productcreate(){

        return view('home.softwarecreate');
    }


        public function productstore(movieRequest $req){
           // public function productstore(request $req){


                // $validation = Validator::make($req->all(), [
                //     'productname' => 'required|bail',
                //     'unitprice' => 'required',
                //     'catagory' => 'required',
                //     'details' => 'required',
                //     'status'=>'required',
                //     'myfile'=>'required'

                // ]);

                // if($validation->fails()){

                //      return Back()->with('errors', $validation->errors())->withInput();
                //    }



        if($req->hasFile('myfile')){
            $file = $req->file('myfile');

            $filename = time().".".$file->getClientOriginalExtension();
            $file->move('upload', $filename);

            $user = new softwarelist();

        //$user->moviename = $req->moviename;

        $user->details     = $req->details;
            $user->image     = $file->getClientOriginalName();

            $user->save();


           return redirect('/home/softwarelist');
        }



    }


    public function productedit($id){

      $user =softwarelist::find($id);
      return view('home.softwareedit')->with('user', $user);


    }

    public function productupdate($id, movieRequest $req){


        // $validation = Validator::make($req->all(), [
        //     'productname' => 'required|bail',
        //     'unitprice' => 'required',
        //     'catagory' => 'required',
        //     'details' => 'required',
        //     'status'=>'required',
        //     'myfile'=>'required'

        // ]);

        // if($validation->fails()){

        //      return Back()->with('errors', $validation->errors())->withInput();
        //    }


        $user = softwarelist::find($id);

      //  $user->moviename = $req->moviename;

            $user->details     = $req->details;

        $user->save();

        return redirect('/home/softwarelist');
    }
    public function productlist(){



        $userlist = softwarelist::all();

        return view('home.softwarelist')->with('list', $userlist);

    }

    public function productlist_search(Request $req){

        $search=$req->input('search');
        $userlist=softwarelist::query()
        ->where('productname','LIKE',"%{$search}%")
        ->orwhere('catagory','LIKE',"%{$search}%")
        ->orwhere('status','LIKE',"%{$search}%")
        ->get();

        return view('home.softwarelist')->with('list', $userlist);
    }




    public function productdelete($id){

        $user = softwarelist::find($id);
        return view('home.softwaredelete')->with('user', $user);
    }

    public function productdestroy($id){

        if(softwarelist::destroy($id)){
            return redirect('/home/softwarelist');
        }else{
            return redirect('/home/softwaredelete/'.$id);
        }

    }
}
