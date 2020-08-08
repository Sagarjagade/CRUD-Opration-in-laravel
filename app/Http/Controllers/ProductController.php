<?php

namespace App\Http\Controllers;

use App\product;
use App\login;
use Illuminate\Http\Request;
use Validator;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {

        return view('CRUD.show');
    }

     public function index()
    {
       // $list = DB::table('product')->orderBy('id')->get();
        $list = product::all();
        return view('CRUD.listdata')->with(compact('list'));
    }

    public function store(Request $request)
    {
        $validators = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'mobilenumber' => 'required',
            'destination' => 'required',
            'description' => 'required',

        ]);

        if($validators->passes())
        {
           // echo '<pre>test<br>';print_r($request->all());exit;
           $products = new product();
            $products->firstname = $request->firstname;
            $products->lastname = $request->lastname;
            $products->gender = $request->gender;
            $products->mobilenumber = $request->mobilenumber;
            $products->destination = $request->destination;
            $products->description = $request->description;

            $products->save();

            $request->session()->flash('msg','Add Record Successfully');
            return redirect(route('createlist'));
        }
        else
        {
             //echo '<pre>test1<br>';print_r( $validators->errors());exit;
           
            return redirect(route('createlist.list'))->withErrors($validators)->withInput();
        }
    }


    public function delete($id, Request $request)
    {
        $list = product::where('id',$id)->first();

        if(!$list)
        {
            $request->session()->flash('errormsg',' Record Not Found');
            return redirect(route('createlist'));
        }

        product::where('id',$id)->delete();
        $request->session()->flash('msg',' Record Delete succesfully');
            return redirect(route('createlist'));
    }

    public function update($id, Request $request)
    {
        $validators = Validator::make($request->all(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'mobilenumber' => 'required',
            'destination' => 'required',
            'description' => 'required',

        ]);

        if($validators->passes())
        {
           // echo '<pre>test<br>';print_r($request->all());exit;
           $products =product::find($id);
            $products->firstname = $request->firstname;
            $products->lastname = $request->lastname;
            $products->gender = $request->gender;
            $products->mobilenumber = $request->mobilenumber;
            $products->destination = $request->destination;
            $products->description = $request->description;

            $products->save();

            $request->session()->flash('msg','Update Record Successfully');
            return redirect(route('createlist'));
        }
        else
        {
             //echo '<pre>test1<br>';print_r( $validators->errors());exit;
           
            return redirect(url('createlist/update/'.$$id))->withErrors($validators)->withInput();
        }   
        
    }
    
    public function updatedata($id , request $request)
    {
       
        $list = product::where('id',$id)->first();
        
        if(!$list)
        {
            $request->session()->flash('errormsg',' Record Not Found');
            return redirect(route('createlist'));
        }

        return view('CRUD.edit')->with(compact('list'));
    }  
}
