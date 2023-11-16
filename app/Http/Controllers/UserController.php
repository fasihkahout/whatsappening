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
        if($request->hasfile('map_picture')) {
    $file = $request->file('map_picture');
    $extension = $file->getClientOriginalExtension();
    $file_name = time(). '.' . $extension;
    $file->move(public_path('images/'), $file_name); // Separate directory and file name
    $user->map_picture = $file_name;
}


        $user->email = $request['email'];
        $user->fname = $request['fname'];
        $user->lname = $request['lname'];
        $user->bio = $request['bio'];
        $user->dob = $request['dob'];
        $user->interested_in = $request['interested_in'];
        $user->relationship_status = $request['relationship_status'];
        $user->age = $request['age'];
        $user->location = $request['location'];
        $user->max_distance = $request['max_distance'];
        $user->pronoun = $request['pronoun'];
        $user->status = $request['status'];
        $user->save();
        return redirect('userpage');

    }

    public function userviewtable(){
    
        $user = User::all();
        return view('user-view-table' , compact('user'));
    }


    public function customuserviewtable(Request $request , $id){
        $user = new User();
        if($request->hasfile('map_picture')) {
    $file = $request->file('map_picture');
    $extension = $file->getClientOriginalExtension();
    $file_name = time(). '.' . $extension;
    $file->move(public_path('images/'), $file_name); // Separate directory and file name
    $user->map_picture = $file_name;
}

        $user->email = $request['email'];
        $user->fname = $request['fname'];
        $user->lname = $request['lname'];
        $user->bio = $request['bio'];
        $user->dob = $request['dob'];
        $user->interested_in = $request['interested_in'];
        $user->relationship_status = $request['relationship_status'];
        $user->age = $request['age'];
        $user->location = $request['location'];
        $user->max_distance = $request['max_distance'];
        $user->pronoun = $request['pronoun'];
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
       if($request->hasfile('map_picture')) {
    $file = $request->file('map_picture');
    $extension = $file->getClientOriginalExtension();
    $file_name = time(). '.' . $extension;
    $file->move(public_path('images/'), $file_name); // Separate directory and file name
    $user->map_picture = $file_name;
}

        $user_new->email = $request['email'];
        $user_new->fname = $request['fname'];
        $user_new->lname = $request['lname'];
        $user_new->bio = $request['bio'];
        $user_new->dob = $request['dob'];
        $user_new->interested_in = $request['interested_in'];
        $user_new->relationship_status = $request['relationship_status'];
        $user_new->age = $request['age'];
        $user_new->location = $request['location'];
        $user_new->max_distance = $request['max_distance'];
        $user_new->pronoun = $request['pronoun'];
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
        if($request->hasfile('map_picture')) {
    $file = $request->file('map_picture');
    $extension = $file->getClientOriginalExtension();
    $file_name = time(). '.' . $extension;
    $file->move(public_path('images/'), $file_name); // Separate directory and file name
    $user->map_picture = $file_name;
}

        $user->email = $request->get('email');
        $user->fname = $request->get('fname');
        $user->lname = $request->get('lname');
        $user->bio = $request->get('bio');
        $user->dob = $request->get('dob');
        $user->interested_in = $request->get('interested_in');
        $user->relationship_status = $request->get('relationship_status');
        $user->age = $request->get('age');
        $user->location = $request->get('location');
        $user->max_distance = $request->get('max_distance');
        $user->pronoun = $request->get('pronoun');
        $user->status = $request->get('status');
        $user->save();
        return view('status-edit' ,  compact('user'));
    }
    
    
    
}
