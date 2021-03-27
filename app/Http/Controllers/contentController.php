<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\content;
use App\Http\Requests\contentRequest;

class contentController extends Controller
{

    public function productshow($id){

        $user = content::find($id);
        //print_r($user);
        return view('home.contentdetails')->with('user', $user);
    }




    public function productcreate(){

        return view('home.contentcreate');
    }


        public function productstore(contentRequest $req){
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

            $user = new Product();
            $user->productname = $req->productname;
            $user->catagory = $req->catagory;

           // $user->dept     = $req->dept;
            $user->status     = $req->status;
            $user->details     = $req->details;
            $user->image     = $file->getClientOriginalName();

            $user->save();


           return redirect('/home/contentlist');
        }



    }


    public function productedit($id){

      $user =content::find($id);
      return view('home.contentedit')->with('user', $user);


    }

    public function productupdate($id, contentRequest $req){


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


        $user = content::find($id);

        $user->productname = $req->productname;
            $user->catagory = $req->catagory;

           // $user->dept     = $req->dept;
            $user->status     = $req->status;
            $user->details     = $req->details;

        $user->save();

        return redirect('/home/contentlist');
    }
    public function productlist(){



        $userlist = content::all();

        return view('home.contentlist')->with('list', $userlist);

    }

    public function productlist_search(Request $req){

        $search=$req->input('search');
        $userlist=content::query()
        ->where('productname','LIKE',"%{$search}%")
        ->orwhere('catagory','LIKE',"%{$search}%")
        ->orwhere('status','LIKE',"%{$search}%")
        ->get();

        return view('home.contentlist')->with('list', $userlist);
    }




    public function productdelete($id){

        $user = content::find($id);
        return view('home.contentdelete')->with('user', $user);
    }

    public function productdestroy($id){

        if(content::destroy($id)){
            return redirect('/home/contentlist');
        }else{
            return redirect('/home/contentdelete/'.$id);
        }

    }

}
