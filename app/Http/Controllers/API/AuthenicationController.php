<?php

namespace App\Http\Controllers\API;


use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserImage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Mail;
use Illuminate\Http\Response;






class AuthenicationController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|required|unique:users,email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
             return response()->json(['isSuccessful'=>false, 'data'=>'', 'error'=>$validator->errors()], 404);
         }else{
          $input = $request->all();
           $input['password'] = Hash::make($request->password);
            $user = User::create($input);
            event(new Registered($user));
          //  $accessToken =  $user->createToken('MyApp')->plainTextToken;
            return response()->json(['isSuccessful'=>true, 'data'=> $user, 'message'=>'User Added Successfully'], 200);
         }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials)){
            $user = $request->user();
           // $accessToken =  $user->createToken('MyApp')->plainTextToken;
             $username =  $user->fname.' '.$user->lname;
            return response()->json(['isSuccessful'=>true, 'data'=> $user, 'access-token'=>'',  'message'=>'User Login Successfully'], 200);
        }
        else{
            return response()->json(['isSuccessful'=>false, 'data'=> '', 'message'=>'Invalid Username or Password '], 200);
        }
    }

   public function check_email(Request $request)
    {       $id = $request->id;
        if ($id !=='') {
            $data =  User::find($id);

                if ($data !=='') {
                    $user = User::where('id', $id)->get();
                    if ($data->is_verified == 1) {
                        return response()->json(['isSuccessful'=>true, 'data'=> $data,  'message'=>'User Profile Verified'], 200);
                    } else {
                        return response()->json(['isSuccessful'=>false, 'data'=> '',  'message'=>'Please Verifiy Your Email address'], 200);
                    }
                }
        }else{
            return response()->json(['isSuccessful'=>false, 'data'=>'', 'message'=>'Unauthenticated'], 404);
        }
    }



    public function welcomeInfo(Request $request){
          $id = $request['id'];

        if ($id !=='') {
             $data =  User::where('id', $id)->update(['bio'=> $request['bio'], 'user_status'=> $request['user_status'], 'relationship_status'=>$request['relationship_status'],'dob'=>$request['dob'],  'pronoun'=>$request['pronoun']]);
             $user =  User::find($id);
             return response()->json(['isSuccessful'=>true, 'data'=> $user,'message'=>'User Welcome Details added Successfully'], 200);
        }else{
             return response()->json(['error'=> 'unauthorized','message'=>'unauthorized'], 200);
        }
    }

    public function add_more_picture(Request $request){
   
    
    if ($request->hasFile('picture')) {
                $file = $request->file('picture');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('images');
                 $file->move($destinationPath, $fileName);
             }else{
                  $fileName = '';
             }
             
             
           
             $data =  DB::table('user_image')->insert([
                        'user_id' => $request->id,
                        'picture' => $fileName,
                 ]);

    if($data){
        $user_image = DB::table('user_image')->where('user_id', $request->id)->get();
        return response()->json(['isSuccessful'=>true, 'data'=> $user_image,  'message'=>'User Picture added Successfully'], 200);
    } else {
        return response()->json(['isSuccessful'=>false, 'data'=>'', 'message'=>'Something Went Wrong. Please try again later'], 200);
    }
}


    public function your_preferences(Request $request){
        $id = $request['id'];

        if ($id !=='') {
             $data =  User::where('id', $id)->update(['interested_in'=> $request['interested_in'], 'age'=>$request['age'],'location'=>$request['location'],  'max_distance'=>$request['max_distance'],
             'lat'=>$request['lat'], 'long'=>$request['long'] ]);
             $user = User::find($id);
             return response()->json(['isSuccessful'=>true,'data'=> $user,'message'=>'User Preferences Added Successfully'], 200);
        }else{
             return response()->json(['isSuccessful'=>false,'error'=> 'unauthorized','message'=>'unauthorized'], 200);
        }

    }





    public function verify(Request $request, $id)
    {
        $data = request()->segments();
        if ($id !=='') {
            User::where('id', $data[3])->update(['email_verified_at'=> Carbon::now(), 'remember_token'=>$request['hash'], 'is_verified'=>1]);
            return view('mail_verified');
        }
    }
    
    public function forgot_password(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|exists:users,email',
    ]);

    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 401);
    }

    $to_email = $request->email;

    // Fetch the user by email and get their ID
    $user = User::where('email', $to_email)->first();
    $user_id = $user->id;

    $email_data['email_data'] = $user;
    $to_name = 'Forgot Password.';
    $response = $this->mail('Reset Password', $to_email, 'mail', $to_name, $email_data);

    return response()->json(['isSuccessful' => true, 'user_id' => $user_id, 'data' => $response, 'message' => 'Email Sent Successfully. Kindly check your E-mail inbox'], 200);
}

    public function mail($to_name, $to_email, $template, $title, $email_data = array())
    {
        $to_name = $to_name;
        $data = array(
            'name' => env('MAIL_FROM_NAME') ,
            'body' => $to_name
        );

       Mail::send($template, ['email_data' => $email_data], function ($message) use ($to_name, $to_email, $title) {
    $message->to($to_email, $to_name)->subject($title);
    $message->from(env('MAIL_USERNAME'), 'Whatsappening');
});
        $res = 'Email sent to' . $to_email;
        return $res;
    }
    
public function reset_password(Request $request)
{
    // Validate the input data
    $validator = Validator::make($request->all(), [
        'id' => 'required|exists:users,id',
        'password' => 'required', // Adjust the validation rules as needed
    ]);

    // Check if validation fails
    if ($validator->fails()) {
        return response()->json(['isSuccessful' => false, 'error' => 'validation_error', 'message' => $validator->errors()], 400);
    }

    // Fetch the user by ID
    $user = User::find($request->input('id'));

    // Update the user's password
    $password = Hash::make($request->input('password'));
    $user->password = $password;
    $user->save();

    return response()->json(['isSuccessful' => true, 'message' => 'Password updated successfully'], 200);
}


// public function reset_password(Request $request)
// {
//     $id = $request->input('id');
//     $password = Hash::make($request->input('password'));

//     if (!$user) {
//         return response()->json(['isSuccessful' => false, 'error' => 'unauthorized', 'message' => 'User not found'], 404);
//     }

//     User::where('id', $id)->update(['password' => $password]);

//     return response()->json(['isSuccessful' => true, 'message' => 'Password updated Successfully'], 200);
// }


}

