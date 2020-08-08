<?php

namespace App\Http\Controllers;

use App\login;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\Facades\Input;


class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('CRUD.login');
    }

    public function Register()
    {
        return view('CRUD.Register');
    }

    public function forget()
    {
        return view('CRUD.forget');
    }

    public function logindata(Request $request)
    {
        $validators = Validator::make($request->all(),[
                        'gmailID' => 'Required ',
                        'password' => 'Required | max:10',
        ]);

        if($validators->passes())
        {
                $uname = Input::get('gmailID');
               $password = Input::get('password');
       
              $user = login::where('gmailID', '=',$uname)->first();
              $Password = login::where('password', '=',$password)->first();

                $fullname = $user->name;
       
                if ($user && $Password)
                {
                  //return view('CRUD.listdata')->with(compact('list','fullname'));
                    return redirect(route('createlist'))->with('fullname',$fullname);

                }
                else 
                {        
                    $request->session()->flash('errormsglogin','Please check Username and Password !!!');
                    return redirect(route('login'));
                }

        }else
        {
             return redirect(route('login'))->withErrors($validators)->withInput();
        }
    }

    public function Registerdata(Request $request)
    {
        $validators = Validator::make($request->all(),[
                        'name' => 'Required | max:25',
                        'gmailID' => 'Required | email',
                        'password' => 'Required | max:10',
        ]);

        if($validators->passes())
        {
           $logins = new login();
           $logins->name = $request->name;
           $logins->gmailID = $request->gmailID;
           $logins->password = $request->password;
           $logins->save();

           $request->session()->flash('msg','Record Add Successfully!! Please login Now.');
           return redirect(route('Register'));
        }
        else
        {
            return redirect(route('Register'))->withErrors($validators)->withInput();
        }
    }
   
}
