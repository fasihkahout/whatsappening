<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function store(Request $request){     
        
       $input = $request->all();        
       $user = User::create($input);
       // $success['token'] =  $user->createToken('MyApp')->plainTextToken;
     //   $success['name'] =  $user->name;

       // $user = new User();

        // if($request->hasfile('file_path'))
        // {
        //     $file = $request->file('file_path');
        //     $extension = $file->getClientOriginalExtension();
        //     $file_name = time(). '.' . $extension;
        //     $file->move('uploads/images/' , $file_name);
        //     $user->file_path = $file_name;
        // }

        // $user->email = $request['email'];
        // $user->fname = $request['fname'];
        // $user->lname = $request['lname'];
        // $user->bio = $request['bio'];
        // $user->number = $request['number'];
        // $user->dob = $request['dob'];
        // $user->interest = $request['interest'];
        // $user->relationship = $request['relationship'];
        // $user->age = $request['age'];
        // $user->location = $request['location'];
        // $user->distance = $request['distance'];
        // $user->my_age = $request['my_age'];
        // $user->pronouns = $request['pronouns'];
        // $user->status = $request['status'];
        // $user->verification_token = Str::random(40);
        // $user->save();
        return response()->json(['data'=> $user,'message'=>'User Added Successfully'] , 200);
    }
}
