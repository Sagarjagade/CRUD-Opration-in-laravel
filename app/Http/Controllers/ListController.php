<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lists;
use Validator;
use DB;
class ListController extends Controller
{
    public function index()
    {
        // $article = DB::table('list')->orderBy('id')->get();

         $article = lists::all();
        return view('list')->with(compact('article'));
    }

    public function show()
    {
       
        return view('Create');
    }

    public function Insert(Request $request)
    {

    	/*$request->validate([
    		'title' => 'required',
    		'description' => 'required',
    	]);*/


    	$validators = Validator::make($request->all(), [
    		'title' => 'required',
    		'description' => 'required',
    	]);

    	if($validators->passes())
    	{	
    		$lists = new lists();
    		$lists->title = $request->title;
    		$lists->description = $request->description;
    		$lists->save();

    		$request->session()->flash('msg','Article saved');
    		return redirect(route('list'));

    	}else
    	{
    		return redirect(route('list.Create'))->withErrors($validators)->withInput();
    	}
    	//echo '<pre>test<br>';print_r($request->all());exit;

    }


    public function delete($id,Request $request)
    {
        $article = lists::where('id',$id)->first();

        if(!$article)
        {
            $request->session()->flash('msg','Record not found');
            return redirect(route('list'));
        }

        lists::where('id',$id)->delete();
         $request->session()->flash('msg','Record delete successfully');
            return redirect(route('list'));
    }

    public function update($id, Request $request)
    {
        $article = lists::where('id',$id)->first();

        if(!$article)
        {
            $request->session()->flash('errormsg','Record not found');
            return redirect(route('list'));
        }

         return view('update')->with(compact('article'));

    }


    public function updateData($id, Request $request)
    {
        $validators = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ]);

        if($validators->passes())
        {   
            $lists = lists::find($id);
            $lists->title = $request->title;
            $lists->description = $request->description;
            $lists->save();

            $request->session()->flash('msg','Article Updated');
            return redirect(route('list'));

        }else
        {
            return redirect('list/update/'.$id)->withErrors($validators)->withInput();
        }

    }
    
}
