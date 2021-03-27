<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Product;
use App\Http\Requests\productlistRequest;

class productlistController extends Controller
{
      //product-----------------------------------------------------



      public function productshow($id){

        $user = Product::find($id);
        //print_r($user);
        return view('home.productdetails')->with('user', $user);
    }




    public function productcreate(){

        return view('home.productcreate');
    }


        public function productstore(productlistRequest $req){
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


           return redirect('/home/productlist');
        }



    }


    public function productedit($id){

      $user =Product::find($id);
      return view('home.productedit')->with('user', $user);


    }

    public function productupdate($id, productlistRequest $req){


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


        $user = Product::find($id);

        $user->productname = $req->productname;
            $user->catagory = $req->catagory;

           // $user->dept     = $req->dept;
            $user->status     = $req->status;
            $user->details     = $req->details;

        $user->save();

        return redirect('/home/productlist');
    }
    public function productlist(){



        $userlist = Product::all();

        return view('home.productlist')->with('list', $userlist);

    }

    public function productlist_search(Request $req){

        $search=$req->input('search');
        $userlist=Product::query()
        ->where('productname','LIKE',"%{$search}%")
        ->orwhere('catagory','LIKE',"%{$search}%")
        ->orwhere('status','LIKE',"%{$search}%")
        ->get();

        return view('home.productlist')->with('list', $userlist);
    }




    public function productdelete($id){

        $user = Product::find($id);
        return view('home.productdelete')->with('user', $user);
    }

    public function productdestroy($id){

        if(Product::destroy($id)){
            return redirect('/home/productlist');
        }else{
            return redirect('/home/productdelete/'.$id);
        }

    }


}
