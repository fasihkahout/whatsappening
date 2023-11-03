<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Guard;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Session;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->adminlogin();
    }

    public function adminlogin()
    {      
        if(Session()->get('admin_id') !=''){                                 
          return redirect()->route('admin.home');
        }else{                  
            return view('adminlogin');
        }
    }

    public function checkLogin(Request $request)
    {

    }

   /* public function customadminlogin(Request $request){
        $email = $request->email;
        $password = $request->password;
        $admin = AdminLogin::where('email', $email)->first();

        if ($admin && Hash::check($password, $admin->password)) {
            $request->session()->put('admin_id', $admin->id);
            return redirect('index');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password');
        }
    } */


    public function customadminlogin(Request $request){
        $credentials = $request->only('email', 'password');
       
        if(Auth::guard('admin')->attempt($credentials)){           
            $request->session()->put('admin_id',1);          
            return redirect('home');
        }else{           
            return redirect()->back();
        }
    }
    public function logout(){
        session()->put('admin_id', '');
        return redirect('/');
    }

}
