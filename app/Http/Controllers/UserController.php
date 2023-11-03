<?php

namespace App\Http\Controllers;

use App\Models\User;

use App\Mail\VerifyEmail;
use App\Models\Admin;
use App\Models\UserMessage;
use Illuminate\Support\Str;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function userpage() {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();

            return view('userpage');
        } else {
            return view('adminlogin');
        }
    }

    public function customuserpage(Request $request){
        $user = new User();
        if($request->hasfile('file_path'))
        {
            $file = $request->file('file_path');
            $extension = $file->getClientOriginalExtension();
            $file_name = time(). '.' . $extension;
            $file->move('uploads/images/' , $file_name);
            $user->file_path = $file_name;
        }

        $user->email = $request['email'];
        $user->fname = $request['fname'];
        $user->lname = $request['lname'];
        $user->bio = $request['bio'];
        $user->number = $request['number'];
        $user->dob = $request['dob'];
        $user->interest = $request['interest'];
        $user->relationship = $request['relationship'];
        $user->age = $request['age'];
        $user->location = $request['location'];
        $user->distance = $request['distance'];
        $user->my_age = $request['my_age'];
        $user->pronouns = $request['pronouns'];
        $user->status = $request['status'];
        $user->verification_token = Str::random(40);
        $user->save();
        return redirect('userpage');

    }

    public function userviewtable(){
    
        $user = User::all();
        return view('user-view-table' , compact('user'));
    }


    public function customuserviewtable(Request $request , $id){
        $user = new User();
        if($request->hasfile('file_path'))
        {
            $file = $request->file('file_path');
            $extension = $file->getClientOriginalExtension();
            $file_name = time(). '.' . $extension;
            $file->move('uploads/images/' , $file_name);
            $user->file_path = $file_name;
        }

        $user->email = $request['email'];
        $user->fname = $request['fname'];
        $user->lname = $request['lname'];
        $user->bio = $request['bio'];
        $user->number = $request['number'];
        $user->dob = $request['dob'];
        $user->interest = $request['interest'];
        $user->relationship = $request['relationship'];
        $user->age = $request['age'];
        $user->location = $request['location'];
        $user->distance = $request['distance'];
        $user->my_age = $request['my_age'];
        $user->pronouns = $request['pronouns'];
        $user->status = $request['status'];
        $user->save();
        return redirect('userpage');

    }


    public function adminview($id){
        $user = User::find($id);
        return view('admin-view' , compact('user'));
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function adminchat(){
        $user = User::all();
        return view('adminchat' , compact('user'));
    }

    public function customadminchat(Request $request, $id){
        $user = User::all();
        $user_new = new User();
        if($request->hasfile('file_path'))
        {
            $file = $request->file('file_path');
            $extension = $file->getClientOriginalExtension();
            $file_name = time(). '.' . $extension;
            $file->move('uploads/images/' , $file_name);
            $user_new->file_path = $file_name;
        }

        $user_new->email = $request['email'];
        $user_new->fname = $request['fname'];
        $user_new->lname = $request['lname'];
        $user_new->bio = $request['bio'];
        $user_new->number = $request['number'];
        $user_new->dob = $request['dob'];
        $user_new->interest = $request['interest'];
        $user_new->relationship = $request['relationship'];
        $user_new->age = $request['age'];
        $user_new->location = $request['location'];
        $user_new->distance = $request['distance'];
        $user_new->my_age = $request['my_age'];
        $user_new->pronouns = $request['pronouns'];
        $user_new->status = $request['status'];
        $user_new->save();
        return redirect('userpage');
    }

    public function statusedit($id){
        $user = User::find($id);
        return view('status-edit' , compact('user'));
    }

    public function customstatusedit( $id , Request $request){
        $user = User::find($id);
        if($request->hasfile('file_path'))
        {
            $file = $request->file('file_path');
            $extension = $file->getClientOriginalExtension();
            $file_name = time(). '.' . $extension;
            $file->move('uploads/images/' , $file_name);
            $user->file_path = $file_name;
        }

        $user->email = $request->get('email');
        $user->fname = $request->get('fname');
        $user->lname = $request->get('lname');
        $user->bio = $request->get('bio');
        $user->number = $request->get('number');
        $user->dob = $request->get('dob');
        $user->interest = $request->get('interest');
        $user->relationship = $request->get('relationship');
        $user->age = $request->get('age');
        $user->location = $request->get('location');
        $user->distance = $request->get('distance');
        $user->my_age = $request->get('my_age');
        $user->pronouns = $request->get('pronouns');
        $user->status = $request->get('status');
        $user->save();
        return view('status-edit' ,  compact('user'));
    }
    
    
    
}
