<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\movielist;
use App\Http\Requests\movieRequest;

class movieController extends Controller
{

    public function productshow($id){

        $user = movielist::find($id);
        //print_r($user);
        return view('home.moviedetails')->with('user', $user);
    }




    public function productcreate(){

        return view('home.productcreate');
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

            $user = new movielist();

        //$user->moviename = $req->moviename;

        $user->details     = $req->details;
            $user->image     = $file->getClientOriginalName();

            $user->save();


           return redirect('/home/movielist');
        }



    }


    public function productedit($id){

      $user =movielist::find($id);
      return view('home.movieedit')->with('user', $user);


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


        $user = movielist::find($id);

      //  $user->moviename = $req->moviename;

            $user->details     = $req->details;

        $user->save();

        return redirect('/home/movielist');
    }
    public function productlist(){



        $userlist = movielist::all();

        return view('home.movielist')->with('list', $userlist);

    }

    public function productlist_search(Request $req){

        $search=$req->input('search');
        $userlist=movielist::query()
        ->where('productname','LIKE',"%{$search}%")
        ->orwhere('catagory','LIKE',"%{$search}%")
        ->orwhere('status','LIKE',"%{$search}%")
        ->get();

        return view('home.movielist')->with('list', $userlist);
    }




    public function productdelete($id){

        $user = movielist::find($id);
        return view('home.moviedelete')->with('user', $user);
    }

    public function productdestroy($id){

        if(movielist::destroy($id)){
            return redirect('/home/movielist');
        }else{
            return redirect('/home/moviedelete/'.$id);
        }

    }
}
