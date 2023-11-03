<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Chat;
use App\Models\Conversation;
use App\Models\Notifications;
use App\Models\UserImage;
use App\Models\FriendRequest;
use App\Models\Meeting;
use App\Models\FriendLike;
use App\Models\MessageRequest;
use App\Models\UserMessage;
use App\Models\Profile_verifiction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;
use App\Mail\AccountDeleted;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;
use App\Notifications\AccountDeletedNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth; 
use DB;


class UserController extends Controller
{
    public function __construct(){

    }
    
public function friend_request(Request $request)
{
    $sender_id = $request->input('sender_id');
    $receiver_id = $request->input('receiver_id');

    $existingRequest = FriendRequest::where('sender_id', $sender_id)
                                    ->where('receiver_id', $receiver_id)
                                    ->first();

    if ($existingRequest === null) {
        $friendRequestData = [
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'status' => 'pending', 
        ];

        $friendRequest = FriendRequest::create($friendRequestData);
        
        $notification = new Notifications;
        $notification->sender_id = $sender_id;
        $notification->receiver_id = $receiver_id;
        $notification->type = 'friend_request';
        $notification->friend_request_id = $friendRequest->id; 
        $notification->save();
        
        return response()->json(['isSuccessful' => true, 'data' => $friendRequest, 'message' => 'Friend Request has been sent'], 200);
    } else {
        return response()->json(['isSuccessful' => false, 'message' => 'Friend Request already sent'], 400);
    }
}

public function friend_status(Request $request)
{
    $id = $request->input('id');
    $status = $request->input('status');

    if ($status !== 'accepted' && $status !== 'declined') {
        return response()->json(['isSuccessful' => false, 'message' => 'Invalid status'], 400);
    }

    FriendRequest::where('status', 'pending')->where('id', $id)->update(['status' => $status]);

    return response()->json(['isSuccessful' => true, 'message' => 'Friend Request status has been updated'], 200);
}


public function friend_like(Request $request)
{
    $sender_id = $request->input('sender_id');
    $receiver_id = $request->input('receiver_id');

   
    $existingLike = FriendLike::where('sender_id', $sender_id)
        ->where('receiver_id', $receiver_id)
        ->first();

    if ($existingLike) {
        return response()->json([
            'isSuccessful' => false,
            'message' => 'You have already liked this user.'
        ], 400);
    }

    $notification = new Notifications;
    $notification->sender_id = $sender_id;
    $notification->receiver_id = $receiver_id;
    $notification->type = 'friend_like';
    $notification->save();

    $input = $request->all();
    $data = FriendLike::create($input);

    return response()->json([
        'isSuccessful' => true,
        'data' => $data,
        'message' => 'Friend Liked Your Profile'
    ], 200);
}

 
   
public function getUsers(Request $request)
{
    try {
        
        $currentUserId = $request->input('id');
        
        $data = User::where('status', 'Active')->get();

        $formattedData = $data->map(function ($user) use ($currentUserId) {
            
            $hasLiked = DB::table('friend_likes')
                ->where('sender_id', $currentUserId)
                ->where('receiver_id', $user->id)
                ->exists();
                

           
            $hasFriendRequest = DB::table('friend_requests')
                ->where('sender_id', $currentUserId)
                ->where('receiver_id', $user->id)
                ->exists();

          
            $hasMessageRequest = DB::table('message_requests')
                ->where('sender_id', $currentUserId)
                ->where('receiver_id', $user->id)
                ->exists();
                
                

            return [
                'id' => $user->id,
                'fname' => $user->fname,
                'lname' => $user->lname,
                'email' => $user->email,
                'map_picture' => $user->map_picture ? url('public/images/' . $user->map_picture) : asset('public/assets/images/dummy-user.png'),
                'profile_picture' => $user->profile_picture ? url('public/images/' . $user->profile_picture) : asset('public/assets/images/dummy-user.png'),
                'age' => $user->age,
                'bio' => $user->bio,
                'dob' => $user->dob,
                'interested_in' => $user->interested_in,
                'is_verified' => $user->is_verified,
                'lat' => $user->lat,
                'long' => $user->long,
                'pronoun' => $user->pronoun,
                'user_status' => $user->user_status,
                'relationship_status' => $user->relationship_status,
                'status' => $user->status,
                'is_like' => $hasLiked, 
                'is_friend' => $hasFriendRequest, 
                'is_message' => $hasMessageRequest, 
            ];
        });

        return response()->json([
            'isSuccessful' => true,
            'data' => $formattedData,
            'message' => 'Active user data list',
        ], 200);
    } catch (\Exception $e) {
        return response()->json([
            'isSuccessful' => false,
            'message' => 'An error occurred while fetching user data.',
            'error' => $e->getMessage(),
        ], 500);
    }
}


    public function getUsers1(){
      $data = User::all();
       return response()->json(['isSuccessful'=>true, 'data'=> $data,  'message'=>'User data list'], 200);     
   }
   
   public function user_status(Request $request)
{
    $id = $request->input('id');
    $status = $request->input('status');

    if ($status !== 'Active') {
        return response()->json(['isSuccessful' => false, 'message' => 'Invalid status'], 400);
    }

    User::where('status', 'Active')->where('id', $id)->update(['status' => $status]);

    return response()->json(['isSuccessful' => true, 'message' => 'User status has been updated'], 200);
}

public function getStatus(Request $request){
    $id = $request->input('id');

    // Retrieve the user based on the provided ID
    $user = User::where('id', $id)->first();

    if ($user) {
        $status = $user->status;
        return response()->json(['isSuccessful' => true, 'data' => $status, 'message' => 'User status found'], 200);
    } else {
        // User with the given ID was not found
        return response()->json(['isSuccessful' => false, 'message' => 'User not found'], 404);
    }
}
   
   
    public function profile_image(Request $request){
          
           if ($request->hasFile('profile_picture')) {
                $file = $request->file('profile_picture');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('images');
                 $file->move($destinationPath, $fileName);
             }else{
                  $fileName = '';
             }
             
             if($request->hasFile('map_picture')) {
                $file = $request->file('map_picture');
                $map_picture = time() . '_' . $file->getClientOriginalName();
                $destinationPath = public_path('images'); 
                 $file->move($destinationPath, $map_picture);
             }else{
                  $map_picture = '';
             }
           
             $data =  User::where('id', $request->id)->update([
                     'profile_picture'=>$fileName,
                     'path'=>'',
                     'map_picture'=>$map_picture,
                 ]);
                
            if($data){
                $user = User::find($request->id);
                 return response()->json(['isSuccessful'=>true, 'data'=> $user,  'message'=>'User profile Picture updated  Successfully'], 200);
            }else{
                 return response()->json(['isSuccessful'=>false, 'data'=>'', 'message'=>'Something Went Wrong Please try again later'], 200);
            }
    }
    
    public function userchat(Request $request){
        
         $input = $request->all(); 
        $res = UserMessage::create($input);
        $data = DB::table('support_messages')
            ->where('sender_id', '=', $request->sender_id)
            ->where('receiver_id', '=', $request->receiver_id)
            ->get();
        return response()->json(['isSuccessful'=>true, 'data'=> $data,  'message'=>'user Message list'], 200); 
        
    }

    public function userchat1(Request $request)
    {

        $message = $request->message;
        $receiver_id  = $request->receiver_id;
        $sender_id =  $request->sender_id;

        $conversationModel = new Conversation();

        $conversationModel->sender_id = $sender_id;
        $conversationModel->receiver_id = $receiver_id;
        $conversationModel->save();

        $conversationId = $conversationModel->id;

        $chatModel = new Chat();

        $chatModel->conversion_id = $conversationId;
        $chatModel->user_id = $sender_id;
        $chatModel->message = $message;
        $chatModel->save();

        $chatMessages = Chat::where('conversion_id',$conversationId)->get();

        
        // $data = UserMessage::where(['receiver_id', $request->receiver_id, 'sender_id',$request->sender_id ])->get();
        return response()->json(['isSuccessful' => true, 'data' => $chatMessages, 'message' => 'user Message list'], 200);

    }
    
public function sendMessage(Request $request)
{
    try {
        $message = $request->input('message');
        $sender_id = $request->input('sender_id');
        $receiver_id = $request->input('receiver_id');
        $from_to = $request->input('from_to');

        $conversionId = $sender_id + $receiver_id;

        $chatModel = new Chat();

        $chatModel->conversion_id = $conversionId;
        $chatModel->sender_id = $sender_id;
        $chatModel->receiver_id = $receiver_id;
        $chatModel->from_to = $from_to;
        $chatModel->message = $message;

        $chatModel->save();

        $chatMessages = Chat::where('conversion_id', $conversionId)
            ->orderBy('created_at', 'asc')
            ->get();

        return response()->json(['isSuccessful' => true, 'data' => $chatMessages, 'message' => 'User Message list'], 200);
    } catch (\Exception $e) {


        return response()->json(['isSuccessful' => false, 'message' => 'An error occurred while sending the message'], 500);
    }
}

public function message_seen(Request $request)
{

    $from_to = $request->input('from_to');

    $message = Chat::where('from_to', $from_to)
         ->where('is_seen', 0)
        ->update(['is_seen' => 1]);
        
        return response()->json(['isSuccessful' => true, 'message' => 'Message seen status has been updated'], 200);
}

public function show_chat(Request $request)
{

    $conversation_id = $request->input('conversion_id');

    $message = Chat::where('conversion_id', $conversation_id)
         ->where('show_chat', 1)
        ->update(['show_chat' => 0]);
        
        return response()->json(['isSuccessful' => true, 'message' => 'Message show chat has been updated'], 200);
}

    public function userConversions(Request $request)
    {
        $sender_id =  $request->sender_id;
        $conversionList = Conversation::select('id','receiver_id', 'sender_id', 'created_at', 'status')

            ->where('receiver_id',$sender_id )
            ->orWhere('sender_id',$sender_id )
            ->where('status', 1)->get();
            $conversionListArray = array();
            foreach ($conversionList as $key => $conversion) {
                $Array = array();
//                $conversionArray = array();
                if ($conversion->sender_id == $sender_id) {
                    $userData = $this->getUserDetails($conversion->receiver_id);
                }else{
                    $userData = $this->getUserDetails($conversion->sender_id);
                }
                $Array['id'] = $conversion->id;
               // $Array['user_id'] = $userData->id;
                $Array['fname'] = $userData->fname;
                $Array['lname'] = $userData->lname;
                //$conversionArray[] = $Array;
                $conversionListArray[] = $Array;
                
            }
        return response()->json(['isSuccessful' => true, 'data' => $conversionListArray, 'message' => 'User conversations list'], 200);

    }
    
   public function friendLiked(Request $request)
{
    $receiver_id = $request->input('id');

    $likedList = DB::table('friend_likes')->where('receiver_id', $receiver_id)->where('status', 'liked')->get();
            $conversionListArray = array();
            foreach ($likedList as $key => $conversion) {
                $Array = array();
                $conversionArray = array();
                if ($conversion->receiver_id == $receiver_id) {
                    $userData = $this->getUserDetails($conversion->sender_id);
                }
                $Array['id'] = $conversion->id;
                $Array['status'] = $conversion->status;
                $Array['user_id'] = $userData->id;
                $Array['fname'] = $userData->fname;
                $Array['lname'] = $userData->lname;
                $Array['map_picture'] = $userData->map_picture ? url('public/images/' . $userData->map_picture) : asset('public/assets/images/dummy-user.png');
                $Array['profile_picture'] = $userData->profile_picture ? url('public/images/' . $userData->profile_picture) : asset('public/assets/images/dummy-user.png');
                $Array['bio'] = $userData->bio;
                $Array['dob'] = $userData->dob;
                $Array['pronoun'] = $userData->pronoun;
                $Array['user_status'] = $userData->user_status;
                $Array['relationship_status'] = $userData->relationship_status;
                $conversionListArray[] = $Array;
                
            }

    if (empty($conversionListArray)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Friend Likes found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'data' => $conversionListArray, 'message' => 'Friend Liked list'], 200);
}

public function friendRequestLists(Request $request)
{
    $receiver_id = $request->input('id');

    $likedList = DB::table('friend_requests')
        ->where('receiver_id', $receiver_id)
        ->where('status', 'pending')
        ->get();

    $conversionListArray = array();

    foreach ($likedList as $key => $conversion) {
        $Array = array();
        $conversionArray = array();

        if ($conversion->receiver_id == $receiver_id) {
            $userData = $this->getUserDetails($conversion->sender_id);
        }

        $Array['id'] = $conversion->id;
        $Array['status'] = $conversion->status;
        $Array['user_id'] = $userData->id;
        $Array['fname'] = $userData->fname;
        $Array['lname'] = $userData->lname;
        $Array['map_picture'] = $userData->map_picture ? url('public/images/' . $userData->map_picture) : asset('public/assets/images/dummy-user.png');
        $Array['profile_picture'] = $userData->profile_picture ? url('public/images/' . $userData->profile_picture) : asset('public/assets/images/dummy-user.png');
        $Array['bio'] = $userData->bio;
        $Array['dob'] = $userData->dob;
        $Array['pronoun'] = $userData->pronoun;
        $Array['user_status'] = $userData->user_status;
        $Array['relationship_status'] = $userData->relationship_status;
        $conversionListArray[] = $Array;
    }

    if (empty($conversionListArray)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Pending Friend Request Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'data' => $conversionListArray, 'message' => 'Pending Friend Request List'], 200);
}

 public function updateSetting(Request $request){
        $id = $request->id;
        
        //  $res=User::where('id',$id)->update(['interested_in'=>$request->interested_in,'location'=>$request->location,'min_age'=>$request->min_age,'max_age'=>$request->max_age, 'max_distance'->$request->max_distance]);
          
         $res1 = DB::table('users')
            ->where('id', $id)
            ->update(['interested_in'=>$request->interested_in,'location'=>$request->location,'min_age'=>$request->min_age,'max_age'=>$request->max_age, 'max_distance'=>$request->max_distance ]);
          
           return response()->json(['isSuccessful'=>true, 'data'=> $res1, 'message'=>'Setting Updated Successfully'], 200);
        
    }
    
// public function messageListing(Request $request)
// {
//     $conversationId = $request->input('conversion_id');
//     $senderId = $request->input('sender_id');

//     $isPremium = User::where('id', $senderId)->value('is_premium');
    

//     $latestChatMessage = Chat::where('conversion_id', $conversationId)
//         ->orderBy('created_at', 'desc')
//         ->first();
       

//     if ($latestChatMessage !== null) {
//         $showChat = $latestChatMessage->show_chat;

//         if (($isPremium == 1 || $isPremium == 0) && $showChat == true) {
//             $chatMessages = Chat::where('conversion_id', $conversationId)
//                 ->where('show_chat', $showChat)
//                 ->get();

//             return response()->json([
//                 'isSuccessful' => true,
//                 'data' => $chatMessages,
//                 'message' => 'User messages list'
//             ], 200);
//         } elseif ($isPremium == 1 && $showChat == false) {
//             $chatMessages = Chat::where('conversion_id', $conversationId)
//                 ->where('show_chat', $showChat)
//                 ->get();

//             return response()->json([
//                 'isSuccessful' => true,
//                 'data' => $chatMessages,
//                 'message' => 'User messages list'
//             ], 200);
//         }
//     }

//     return response()->json([
//         'isSuccessful' => false,
//         'message' => 'User messages list not found'
//     ], 404);
// }

public function messageListing(Request $request)
{
    $conversation_id = $request->conversion_id;
     $sender_id = $request->sender_id;
     $chatMessages = Chat::where('conversion_id', $conversation_id)->get();
    return response()->json(['isSuccessful' => true, 'data' => $chatMessages, 'message' => 'User messages list'], 200);
}


    public function getUserDetails($id)
    {

        $User = User::findOrFail($id);
        return $User;
    }
    
    public function getUserImages(Request $request){
        
        $user_image = DB::table('user_image')->where('user_id', $request->id)->get();
        if($user_image != null){
            return response()->json(['isSuccessful'=>true, 'data'=> $user_image,  'message'=>'user images list'], 200);     
        }else{
            return response()->json(['isSuccessful'=>false, 'data'=> '',  'message'=>'No User image found'], 200); 
        }
        
        
    }
    
public function viewProfile(Request $request) {
    $userId = $request->input('id'); // Assuming the parameter is named 'id'

    $user = DB::table('users')->where('id', $userId)->first();
    
    if ($user) {
        $userImages = DB::table('user_image')->where('user_id', $userId)->get();

        $formattedUserImages = $userImages->map(function ($image) {
            return [
                'id' => $image->id,
                'user_id' => $image->user_id,
                'picture' => $image->picture ? url('public/images/' . $image->picture) : asset('public/assets/images/dummy-user.png'),
            ];
        });

        $formattedUserData = [
            'id' => $user->id,
            'fname' => $user->fname,
            'lname' => $user->lname,
            'email' => $user->email,
            'map_picture' => $user->map_picture ? url('public/images/' . $user->map_picture) : asset('public/assets/images/dummy-user.png'),
            'profile_picture' => $user->profile_picture ? url('public/images/' . $user->profile_picture) : asset('public/assets/images/dummy-user.png'),
            'age' => $user->age,
            'bio' => $user->bio,
            'dob' => $user->dob,
            'interested_in' => $user->interested_in,
            'is_verified' => $user->is_verified,
            'lat' => $user->lat,
            'long' => $user->long,
            'pronoun' => $user->pronoun,
            'user_status' => $user->user_status,
            'relationship_status' => $user->relationship_status,
            'status' => $user->status,
        ];

        return response()->json([
            'isSuccessful' => true,
            'data' => $formattedUserData,
            'images' => $formattedUserImages,
            'message' => 'User data retrieved successfully'
        ], 200);
    } else {
        return response()->json([
            'isSuccessful' => false,
            'message' => 'User not found'
        ], 404);
    }
}


  
    
    public function updateUser(Request $request)
    {
        $res=User::where('id',$request->id)->update(['fname'=>$request->fname,'lname'=>$request->lname,'bio'=>$request->bio,'age'=>$request->age, 'pronoun'=>$request->pronoun,]);
         if($res){
            return response()->json(['isSuccessful'=>true, 'data'=> '', 'message'=>'user data updated successfully'], 200);     
        }else{
            return response()->json(['isSuccessful'=>false, 'data'=> '',  'message'=>'Something went wrong'], 200); 
        }
       
    }
    
    public function friendRequestList(Request $request){
        
        $res = DB::table('friend_requests')->where('sender_id', $request->id)->get();
        $res_array = array();
        foreach($res as $r){
        $res_array =    DB::table('users')
        ->join('friend_requests', 'users.id', '=', 'friend_requests.receiver_id')
        ->where('friend_requests.receiver_id', $r->receiver_id)->get();
        }

        return response()->json(['isSuccessful'=>true, 'data'=> $res_array, 'message'=>'Friend Request List'], 200);     
    }
    
    public function chat(Request $request){
         $input = $request->all(); 
          $data = FriendLike::create($input);
            return response()->json(['isSuccessful'=>true, 'data'=> 'user not found',  'message'=>'Friend Liked Your Profile '], 200); 
         
    }
    
    public function userimg(Request $request){
        
         $sender_id =  $request->sender_id;
     
        $userdetails = DB::table('users')->where('id', $sender_id)->get();
        $userimages = DB::table('user_image')->where('user_id', $sender_id)->get();
          
        return response()->json(['isSuccessful' => true, 'data' => $userdetails, 'images'=>$userimages, 'message' => 'Friend Request list'], 200);
        
    }
    
  public function message_request(Request $request)
{
    $sender_id = $request->input('sender_id');
    $receiver_id = $request->input('receiver_id');

   
    $existingRequest = MessageRequest::where('sender_id', $sender_id)
                                    ->where('receiver_id', $receiver_id)
                                    ->first();

    if ($existingRequest === null) {
      
        $messageRequestData = [
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'status' => 'pending', 
        ];

        $messageRequest = MessageRequest::create($messageRequestData);
        
        
        $notification = new Notifications;
        $notification->sender_id = $sender_id;
        $notification->receiver_id = $receiver_id;
        $notification->message_request_id = $messageRequest->id; 
        $notification->type = 'message_request';
        $notification->save();
        
        return response()->json(['isSuccessful' => true, 'data' => $messageRequest, 'message' => 'Message Request has been sent'], 200);
    } else {
        return response()->json(['isSuccessful' => false, 'message' => 'Message Request already sent'], 400);
    }
}
   
public function message_status(Request $request)
{
    $id = $request->input('id');
    $status = $request->input('status');

    if ($status !== 'accepted' && $status !== 'declined') {
        return response()->json(['isSuccessful' => false, 'message' => 'Invalid status'], 400);
    }

    MessageRequest::where('status', 'pending')->where('id', $id)->update(['status' => $status]);

    return response()->json(['isSuccessful' => true, 'message' => 'Message Request status has been updated'], 200);
}

   
   public function message_request_list(Request $request)
    {
        $receiver_id = $request->input('id');

    $likedList = DB::table('message_requests')->where('receiver_id', $receiver_id)->where('status', 'pending')->get();
            $conversionListArray = array();
            foreach ($likedList as $key => $conversion) {
                $Array = array();
                $conversionArray = array();
                if ($conversion->receiver_id == $receiver_id) {
                    $userData = $this->getUserDetails($conversion->sender_id);
                }
                $Array['id'] = $conversion->id;
                $Array['status'] = $conversion->status;
                $Array['user_id'] = $userData->id;
                $Array['fname'] = $userData->fname;
                $Array['lname'] = $userData->lname;
                $Array['map_picture'] = $userData->map_picture ? url('public/images/' . $userData->map_picture) : asset('public/assets/images/dummy-user.png');
                $Array['profile_picture'] = $userData->profile_picture ? url('public/images/' . $userData->profile_picture) : asset('public/assets/images/dummy-user.png');
                $Array['bio'] = $userData->bio;
                $Array['dob'] = $userData->dob;
                $Array['pronoun'] = $userData->pronoun;
                $Array['user_status'] = $userData->user_status;
                $Array['relationship_status'] = $userData->relationship_status;
                $conversionListArray[] = $Array;
                
            }
             if (empty($conversionListArray)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Message Request Found'], 404);
    }
        return response()->json(['isSuccessful' => true, 'data' => $conversionListArray, 'message' => 'Message Request list'], 200);
}

public function message_list(Request $request)
{
    $user_id = $request->input('id');

    $messageList = DB::table('message_requests')
        ->where(function ($query) use ($user_id) {
            $query->where('sender_id', $user_id)
                  ->orWhere('receiver_id', $user_id);
        })
        ->where('status', 'accepted')
        ->get();

    $messageListArray = array();

    foreach ($messageList as $key => $message) {
        $messageArray = array();

        $isSender = $message->sender_id == $user_id;

        $otherPartyId = $isSender ? $message->receiver_id : $message->sender_id;
        $userData = $this->getUserDetails($otherPartyId);

        $messageArray['id'] = $message->id;
        $messageArray['status'] = $message->status;
        $messageArray['other_party_id'] = $otherPartyId;
        $messageArray['fname'] = $userData->fname;
        $messageArray['lname'] = $userData->lname;
        $messageArray['email'] = $userData->email;
        $messageArray['map_picture'] = $userData->map_picture ? url('public/images/' . $userData->map_picture) : asset('public/assets/images/dummy-user.png');
        $messageArray['profile_picture'] = $userData->profile_picture ? url('public/images/' . $userData->profile_picture) : asset('public/assets/images/dummy-user.png');
        $messageArray['bio'] = $userData->bio;
        $messageArray['dob'] = $userData->dob;
        $messageArray['pronoun'] = $userData->pronoun;
        $messageArray['user_status'] = $userData->user_status;
        $messageArray['relationship_status'] = $userData->relationship_status;

        $messageListArray[] = $messageArray;
    }

    if (empty($messageListArray)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Messages Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'data' => $messageListArray, 'message' => 'Message List'], 200);
}

    
      public function messages(Request $request)
    {
        $sender_id =  $request->sender_id;
        $msgList = MessageRequest::select('id','receiver_id', 'sender_id', 'status')

            ->where('sender_id',$sender_id )
          
            ->where('status', 'accepted')->get();
            $msgListArray = array();
            foreach ($msgList as $key => $conversion) {
                $Array = array();
                    $userData = $this->getUserDetails($conversion->receiver_id);
                
                $Array['receiver_id'] = $conversion->receiver_id;
                $Array['id'] = $conversion->id;
                $Array['user_id'] = $userData->id;
                $Array['fname'] = $userData->fname;
                $Array['lname'] = $userData->lname;
                $msgListArray[] = $Array;
                
            }
        return response()->json(['isSuccessful' => true, 'data' => $msgListArray, 'message' => 'User message list'], 200);

    }
    
    public function update_message_request(Request $request){
       $data = MessageRequest::where('sender_id', $request->sender_id)->where('receiver_id', $request->receiver_id)->update(['status' => $request->status]);
        return response()->json(['isSuccessful' => true, 'data' => $data, 'message' => 'message request '.$request->status], 200);
        
    }
    
    public function profile_verification(Request $request){
         $rules = array(
            'user_id' => 'required',
            'image_video' => 'required',
        );
        

       if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('images'); 
             $file->move($destinationPath, $fileName);
        }


          $restult = DB::table('profile_verification')->insertGetId([
            'user_id' => $request->input('user_id'),
            'image_video' => $fileName,
            'created_at' => now(),
            'updated_at' => now(),
          ]);
        
         return response()->json(['isSuccessful' => true, 'data' => $restult, 'message' => 'Data Save Sucessfully..' ], 200);
    }
    
    
     public function verification_status(Request $request){
       
        $rules = array(
            'user_id' => 'required',
        );
        
      
      $restult = DB::table('profile_verification')->where([
                    'user_id' => $request->input('user_id'),
                ])->get();
      
      if(count($restult)>0){
           return response()->json(['isSuccessful' => true, 'data' => $restult, 'message' => 'Data Save Sucessfully..' ], 200);
      }else{
           return response()->json(['isSuccessful' => false, 'data' => $restult, 'message' => 'Please upload video for profile verification..' ], 401);
      }
        
        
    }
    
    
    public function update_verification_status(Request $request){
       
       $restult = DB::table('profile_verification')->where([
        'user_id' => $request->input('user_id'),
      ])->get();  
      $result = DB::table('profile_verification')->where('user_id', $request->user_id)->get();
      
       if(count($restult)>0){
               $newData = ['verification_status' => $request->update_verification_status];
                      
                     $data =   DB::table('profile_verification')
                                ->where('user_id', $request->user_id)
                                ->update($newData);
                 
           return response()->json(['isSuccessful' => true, 'data' => $data, 'message' => 'Data Updated Sucessfully..' ], 200);
      }else{
           return response()->json(['isSuccessful' => false, 'data' => '', 'message' => 'Something Went Wrong Please try again later..' ], 401);
      }
    }
    
    
public function filter(Request $request)
{
    $validator = Validator::make($request->all(), [
        'pronoun' => 'string',
        'relationship_status' => 'string',
        'min_age' => 'integer',
        'max_age' => 'integer',
        'min_distance' => 'integer',
        'max_distance' => 'integer',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'isSuccessful' => false,
            'error' => $validator->errors(),
            'message' => 'Validation failed',
        ], 400);
    }

 $query = User::query();

    if ($request->has('pronoun') && $request->has('interested_in')) {
        $selectedPronoun = $request->input('pronoun');
        $selectedInterest = $request->input('interested_in');

        if ($selectedInterest === 'Male' || $selectedInterest === 'Female' || $selectedInterest === 'Other') {
            $query->where('pronoun', $selectedInterest)
                  ->where('interested_in', 'like', "%$selectedPronoun%");
        }
    }
    if ($request->has('relationship_status')) {
        $query->where('relationship_status', $request->input('relationship_status'));
    }

    if ($request->has('min_age')) {
        $query->where('age', '>=', $request->input('min_age'));
    }

    if ($request->has('max_age')) {
        $query->where('age', '<=', $request->input('max_age'));
    }

    if ($request->has('min_distance') || $request->has('max_distance')) {
        $latitude = $request->input('latitude', 0);
        $longitude = $request->input('longitude', 0);
        $earthRadius = 6371;

        $query->selectRaw('*, 
            (' . $earthRadius . ' * acos(cos(radians(' . $latitude . ')) * cos(radians(lat)) * cos(radians(`long`) - radians(' . $longitude . ')) + sin(radians(' . $latitude . ')) * sin(radians(lat)))) AS calculated_distance');

        if ($request->has('min_distance')) {
            $query->having('calculated_distance', '>=', $request->input('min_distance'));
        }

        if ($request->has('max_distance')) {
            $query->having('calculated_distance', '<=', $request->input('max_distance'));
        }
    }

    $users = $query->get();
    
    $formattedUsers = $users->map(function ($user) {
            return [
                'id' => $user->id,
                'fname' => $user->fname,
                'lname' => $user->lname,
                'email' => $user->email,
                'map_picture' => $user->map_picture ? url('public/images/' . $user->map_picture) : asset('public/assets/images/dummy-user.png'),
                'profile_picture' => $user->profile_picture ? url('public/images/' . $user->profile_picture) : asset('public/assets/images/dummy-user.png'),
                'age' => $user->age,
                'bio' => $user->bio,
                'dob' => $user->dob,
                'interested_in' => $user->interested_in,
                'is_verified' => $user->is_verified,
                'lat' => $user->lat,
                'long' => $user->long,
                'pronoun' => $user->pronoun,
                'user_status' => $user->user_status,
                'relationship_status' => $user->relationship_status,
                'status' => $user->status,
            ];
        });

    return response()->json([
        'isSuccessful' => true,
        'data' => $formattedUsers,
        'message' => 'Filtered User list data',
    ], 200);
}

public function deleteaccount(Request $request)
{
    $validated = Validator::make($request->all(), [
        'users_id' => 'required', 
        'reason' => 'required',
        'password' => 'required',
        'sendtoEmail' => 'boolean',
    ]);

    if ($validated->fails()) {
        return response()->json([
            'isSuccessful' => false,
            'error' => $validated->errors(),
            'message' => 'Required fields are missing or incorrect',
        ], 400);
    }

    $user = User::find($request->input('users_id'));

    if (!$user) {
        return response()->json([
            'isSuccessful' => false,
            'message' => 'User not found',
        ], 404);
    }

    // Authenticate the user
    if (!Hash::check($request->password, $user->password)) {
        return response()->json([
            'isSuccessful' => false,
            'message' => 'Incorrect password. Please enter the correct password.',
        ], 401);
    }

    $user->delete();

    if ($request->sendtoEmail) {
        // Send the account deletion notification
        Notification::send($user, new AccountDeletedNotification);

        $user->update([
            'sendtoEmail' => 1,
        ]);

        return response()->json([
            'isSuccessful' => true,
            'message' => 'User account is deleted, and email notification is sent to the user',
        ], 200);
    }

    return response()->json([
        'isSuccessful' => true,
        'message' => 'User account is deleted',
    ], 200);
  }
  

public function managePremiumStatus(Request $request)
{
    $id = $request->input('id');
    $is_premium = true; 

    $user = User::find($id);

    if (!$user) {
        return response()->json([
            'message' => 'User not found',
        ], 404);
    }

    $currentPremium = $user->is_premium;
 

    if ($currentPremium == false) { 
        $user->update(['is_premium' => $is_premium]);

        return response()->json([
            'isSuccessful' => true,
            'message' => 'User Premium status updated successfully',
        ], 200);
    }

   
    return response()->json([
        'isSuccessful' => false,
        'message' => 'User is already premium',
    ], 400);
}


  public function checkSubscriptionStatus($userId)
{
    $user = User::find($userId);

    if (!$user) {
        return response()->json([
            'isSuccessful' => false,
            'message' => 'User not found',
        ], 404);
    }

    if ($user->is_premium) {
        return response()->json([
            'isSuccessful' => true,
            'isSubscribed' => true,
            'isPaid' => true, 
            'startDate' => $subscription->start_date, 
            'endDate' => $subscription->end_date, 
            'message' => 'User is subscribed to the premium plan',
        ], 200);
    }

    return response()->json([
        'isSuccessful' => true,
        'isSubscribed' => false,
        'isPaid' => false,
        'message' => 'User is not subscribed to any plan',
    ], 200);
  }
  
  public function block_user(Request $request){
    $sender_id = $request->input('sender_id');
    $receiver_id = $request->input('receiver_id');

    $existingRequest =DB::table('blocked_users')->where('sender_id', $sender_id)
                                    ->where('receiver_id', $receiver_id)
                                    ->first();
    if ($existingRequest === null) {
        $input = [
            'sender_id' => $sender_id,
            'receiver_id' => $receiver_id,
            'status' => 'blocked', 
        ];

        $data = DB::table('blocked_users')->insert($input);
        return response()->json(['isSuccessful' => true,  'message' => 'User has been Blocked'], 200);
    } else {
        return response()->json(['isSuccessful' => false, 'message' => 'User has been already Blocked'], 400);
    }
  }
  
 public function block_status(Request $request)
{
    $id = $request->input('id');
    $newStatus = 'unblocked'; 

    $currentStatus = DB::table('blocked_users')
        ->where('id', $id)
        ->value('status');

    if ($currentStatus === 'blocked') {
        DB::table('blocked_users')
            ->where('id', $id)
            ->update(['status' => $newStatus]);

        return response()->json(['isSuccessful' => true, 'message' => 'Blocked User status has been updated to unblocked'], 200);
    } else {
        return response()->json(['isSuccessful' => false, 'message' => 'User is not blocked'], 400);
    }
}

  
  public function block_user_list(Request $request)
{
    $user_id = $request->input('id');

    $messageList = DB::table('blocked_users')
        ->where(function ($query) use ($user_id) {
            $query->where('sender_id', $user_id)
                  ->orWhere('receiver_id', $user_id);
        })
        ->where('status', 'blocked')
        ->get();

    $messageListArray = array();

    foreach ($messageList as $key => $message) {
        $messageArray = array();

        $isSender = $message->sender_id == $user_id;

        $otherPartyId = $isSender ? $message->receiver_id : $message->sender_id;
        $userData = $this->getUserDetails($otherPartyId);

        $messageArray['id'] = $message->id;
        $messageArray['status'] = $message->status;
        $messageArray['other_party_id'] = $otherPartyId;
        $messageArray['fname'] = $userData->fname;
        $messageArray['lname'] = $userData->lname;
        $messageArray['map_picture'] = $userData->map_picture ? url('public/images/' . $userData->map_picture) : asset('public/assets/images/dummy-user.png');
        $messageArray['profile_picture'] = $userData->profile_picture ? url('public/images/' . $userData->profile_picture) : asset('public/assets/images/dummy-user.png');
        $messageArray['bio'] = $userData->bio;
        $messageArray['dob'] = $userData->dob;
        $messageArray['pronoun'] = $userData->pronoun;
        $messageArray['user_status'] = $userData->user_status;
        $messageArray['relationship_status'] = $userData->relationship_status;

        $messageListArray[] = $messageArray;
    }

    if (empty($messageListArray)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Blocked User Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'data' => $messageListArray, 'message' => 'Blocked User List'], 200);
  }

public function notifications(Request $request)
{
    $receiver_id = $request->input('id');

    $notification = DB::table('notification')
        ->where('receiver_id', $receiver_id)
        ->where('status', 'un-read')
        ->get();

    $conversionListArray = array();

    foreach ($notification as $key => $conversion) {
        $Array = array();
        $conversionArray = array();

        if ($conversion->receiver_id == $receiver_id) {
            $userData = $this->getUserDetails($conversion->sender_id);
        }
        $Array['id'] = $conversion->id;
        $Array['type'] = $conversion->type;
        $Array['friend_request_id'] = $conversion->friend_request_id;
        $Array['message_request_id'] = $conversion->message_request_id;
        $Array['meeting_id'] = $conversion->meeting_id;
        $Array['status'] = $conversion->status;
        $Array['user_id'] = $userData->id;
        $Array['fname'] = $userData->fname;
        $Array['lname'] = $userData->lname;
        $Array['map_picture'] = $userData->map_picture ? url('public/images/' . $userData->map_picture) : asset('public/assets/images/dummy-user.png');
        $Array['profile_picture'] = $userData->profile_picture ? url('public/images/' . $userData->profile_picture) : asset('public/assets/images/dummy-user.png');
        $Array['bio'] = $userData->bio;
        $Array['dob'] = $userData->dob;
        $Array['pronoun'] = $userData->pronoun;
        $Array['user_status'] = $userData->user_status;
        $Array['relationship_status'] = $userData->relationship_status;
        $conversionListArray[] = $Array;
    }

    if (empty($conversionListArray)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Notification Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'data' => $conversionListArray, 'message' => 'Notifications List'], 200);
}

public function notification_status(Request $request)
{
    $senderId = $request->input('receiver_id');
    $id = $request->input('id');
    $status = 'read'; 

   
    if (!empty($id)) {
        Notifications::where('id', $id)->update(['status' => $status]);
        return response()->json(['isSuccessful' => true, 'message' => 'Notification status has been updated to read'], 200);
    }

    
    if (!empty($senderId)) {
        Notifications::where('receiver_id', $senderId)->update(['status' => $status]);
        return response()->json(['isSuccessful' => true, 'message' => 'All notifications for sender_id have been updated to read'], 200);
    }

   
    return response()->json(['isSuccessful' => false, 'message' => 'Invalid parameters'], 400);
}

public function chat_status(Request $request)
{
    
    $id = $request->input('receiver_id');
    $status = 'read'; 

   
    if (!empty($id)) {
        Chat::where('receiver_id', $id)->update(['message_status' => $status]);
        return response()->json(['isSuccessful' => true, 'message' => 'Message status has been updated to read'], 200);
    }

   
    return response()->json(['isSuccessful' => false, 'message' => 'Invalid parameters'], 400);
}



public function total_notification(Request $request)
{
    $receiver_id = $request->input('id');

    $notification = DB::table('notification')
        ->where('receiver_id', $receiver_id)
        ->where('status', 'un-read')
        ->count();

    if (empty($notification)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Notification Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'total' => $notification, 'message' => 'Total Notifications '], 200);
}

public function total_friends(Request $request)
{
    $receiver_id = $request->input('id');

    $friend = DB::table('friend_requests')
        ->where('receiver_id', $receiver_id)
        ->where('status', 'pending')
        ->count();

    if (empty($friend)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Friend request Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'total' => $friend, 'message' => 'Total Friend requests '], 200);
}

public function total_requests(Request $request)
{
    $receiver_id = $request->input('id');

    $request = DB::table('message_requests')
        ->where('receiver_id', $receiver_id)
        ->where('status', 'pending')
        ->count();

    if (empty($request)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Message request Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'total' => $request, 'message' => 'Total Message requests '], 200);
}

public function total_likes(Request $request)
{
    $receiver_id = $request->input('id');

    $like = DB::table('friend_likes')
        ->where('receiver_id', $receiver_id)
        ->where('status', 'liked')
        ->count();

    if (empty($like)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Likes Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'total' => $like, 'message' => 'Total Likes '], 200);
}

public function total_messages(Request $request)
{
    $receiver_id = $request->input('id');

    $message = DB::table('chats')
        ->where('receiver_id', $receiver_id)
        ->where('message_status', 'un-read')
        ->count();

    if (empty($message)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Messages Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'total' => $message, 'message' => 'Total Messages '], 200);
}

public function friend_list(Request $request)
{
    $user_id = $request->input('id');
    $user = $this->getUserDetails($user_id);
   if ($user && $user->is_premium == 1){
    $messageList = DB::table('friend_requests')
        ->where(function ($query) use ($user_id) {
            $query->where('sender_id', $user_id)
                  ->orWhere('receiver_id', $user_id);
        })
        ->where('status', 'accepted')
        ->get();
   

    $messageListArray = array();

    foreach ($messageList as $key => $message) {
        $messageArray = array();

        $isSender = $message->sender_id == $user_id;

        $otherPartyId = $isSender ? $message->receiver_id : $message->sender_id;
        $userData = $this->getUserDetails($otherPartyId);

        $messageArray['id'] = $message->id;
        $messageArray['status'] = $message->status;
        $messageArray['other_party_id'] = $otherPartyId;
        $messageArray['fname'] = $userData->fname;
        $messageArray['lname'] = $userData->lname;
        $messageArray['map_picture'] = $userData->map_picture ? url('public/images/' . $userData->map_picture) : asset('public/assets/images/dummy-user.png');
        $messageArray['profile_picture'] = $userData->profile_picture ? url('public/images/' . $userData->profile_picture) : asset('public/assets/images/dummy-user.png');
        $messageArray['bio'] = $userData->bio;
        $messageArray['dob'] = $userData->dob;
        $messageArray['pronoun'] = $userData->pronoun;
        $messageArray['user_status'] = $userData->user_status;
        $messageArray['relationship_status'] = $userData->relationship_status;

        $messageListArray[] = $messageArray;
    }

    if (empty($messageListArray)) {
        return response()->json(['isSuccessful' => false, 'message' => 'No Friends Found'], 404);
    }

    return response()->json(['isSuccessful' => true, 'data' => $messageListArray, 'message' => 'Friends List'], 200);
    
    }else{
       return response()->json(['isSuccessful' => false, 'message' => 'User is not a Premium user'], 404); 
    }
}

 public function location(Request $request)
{
    $id = $request->input('id');
    $lat = $request->input('lat');
    $long = $request->input('long');

    $user = User::find($id);

    if (!$user) {
        return response()->json(['isSuccessful' => false,'message' => 'User not found'], 404);
    }

    try {
        $user->update([
            'lat' => $lat,
            'long' => $long,
        ]);
    } catch (\Exception $e) {
        \Log::error('Error updating user location: ' . $e->getMessage());
        return response()->json(['message' => 'An error occurred while updating user location'], 500);
    }

    return response()->json(['isSuccessful' => true, 'data' => $user, 'message' => 'User location updated successfully'], 200);
  }
  
public function meeting(Request $request)
{
    try {
        $sender_id = $request->input('sender_id');
        $receiver_id = $request->input('receiver_id');
        $sender_name = $request->input('sender_name');
        $location_name = $request->input('location_name');
        $date = $request->input('date');
        $time = $request->input('time');

        $meeting = new Meeting();
        $meeting->sender_id = $sender_id;
        $meeting->receiver_id = $receiver_id;
        $meeting->sender_name = $sender_name;
        $meeting->location_name = $location_name;
        $meeting->date = $date;
        $meeting->time = $time;
        $meeting->save();

        
        $notification = new Notifications();
        $notification->sender_id = $sender_id;
        $notification->receiver_id = $receiver_id;
        $notification->type = 'meeting';
        $notification->meeting_id = $meeting->id; 
        $notification->save();

        return response()->json(['isSuccessful' => true, 'data' => $meeting, 'message' => 'Meeting list'], 200);
    } catch (\Exception $e) {
        return response()->json(['isSuccessful' => false, 'message' => 'An error occurred while entering the meeting data'], 500);
    }
}

public function meeting_status(Request $request)
{
    $id = $request->input('id');
    $status = $request->input('status');
   

    if ($status !== 'accepted' && $status !== 'declined') {
        return response()->json(['isSuccessful' => false, 'message' => 'Invalid status'], 400);
    }

    $meeting = Meeting::where('status', 'pending')->where('id', $id)->update(['status' => $status]);

    return response()->json(['isSuccessful' => true, 'message' => 'Meeting status has been updated'], 200);
}



}
