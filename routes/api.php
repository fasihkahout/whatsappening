<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthenicationController;
use App\Http\Controllers\API\UserController;



// Verify email


Route::controller(AuthenicationController::class)->group(function(){
    Route::post('register', 'register');   
    Route::post('welcome_info', 'welcome_info');
    Route::post('login', 'login');
    Route::post('add_more_picture', 'add_more_picture');
    Route::post('forgot_password', 'forgot_password');
});

Route::get('email/verify/{id}', [AuthenicationController::class, 'verify'])->name('verification.verify');
Route::post('check_email', [AuthenicationController::class, 'check_email']);
Route::post('/user/welcomeInfo', [AuthenicationController::class, 'welcomeInfo']);

Route::post('user/add-more-picture', [AuthenicationController::class, 'add_more_picture']);
Route::post('user/your-preferences', [AuthenicationController::class, 'your_preferences']);
Route::put('user/reset_password', [AuthenicationController::class, 'reset_password']);
Route::post('user/update-setting', [UserController::class, 'updateSetting']);
Route::post('user/friend-request', [UserController::class, 'friend_request']);
Route::post('user/friend-like', [UserController::class, 'friend_like']);
Route::get('user/user-list', [UserController::class, 'getUsers']);
Route::get('user/user-list1', [UserController::class, 'getUsers1']);
Route::post('user/update-profile', [UserController::class, 'profile_image']);

Route::post('user/userchat', [UserController::class, 'userchat']);
Route::post('user/userchat1', [UserController::class, 'userchat1']);
Route::post('user/send-message', [UserController::class, 'sendMessage']);
Route::post('user/conversions', [UserController::class, 'userConversions']);
Route::post('user/message-listing', [UserController::class, 'messageListing']);

Route::post('user/friend-like-list', [UserController::class, 'friendLiked']);
Route::post('user/friends-request-list', [UserController::class, 'friendRequestLists']);
Route::post('user/update-setting', [UserController::class, 'updateSetting']);


Route::post('user/get-user-images', [UserController::class, 'getUserImages']);
Route::post('user/view-profile', [UserController::class, 'viewProfile']);
Route::post('user/update-user', [UserController::class, 'updateUser']);
Route::post('user/chat', [UserController::class, 'chat']);
Route::post('user/user-images', [UserController::class, 'userimg']);
Route::post('user/friend-request-accepted', [UserController::class, 'friendRequestAccept']);
//Route::post('user/message-request', [UserController::class, 'message_request']);

Route::post('user/message-request', [UserController::class, 'message_request']);
Route::post('user/message-request-list', [UserController::class, 'message_request_list']);

Route::post('user/messages', [UserController::class, 'messages']);

Route::post('user/update-messages-request', [UserController::class, 'update_message_request']);

Route::post('user/profile-verification', [UserController::class, 'profile_verification']);
Route::post('user/verification-status', [UserController::class, 'verification_status']);
Route::post('user/update-verification-status', [UserController::class, 'update_verification_status']);

Route::post('user/report', [UserController::class, 'report']);
Route::post('user/filter', [UserController::class, 'filter']);
Route::post('user/delete/account', [UserController::class, 'deleteaccount']);
Route::get('user/friendsrequest-list', [UserController::class, 'friendRequestLists']);
Route::get('user/friendslike-list', [UserController::class, 'friendLiked']);
Route::get('user/messagesrequest-list', [UserController::class, 'message_request_list']);
Route::put('user/friend-status', [UserController::class, 'friend_status']);
Route::put('user/message-status', [UserController::class, 'message_status']);
Route::get('user/message-list', [UserController::class, 'message_list']);
Route::post('user/block-user', [UserController::class, 'block_user']);
Route::get('user/block-user-list', [UserController::class, 'block_user_list']);
Route::get('user/notification', [UserController::class, 'notifications']);
Route::put('user/block-status', [UserController::class, 'block_status']);
Route::get('user/friend-list', [UserController::class, 'friend_list']);
Route::put('user/location', [UserController::class, 'location']);
Route::put('user/message-seen', [UserController::class, 'message_seen']);
Route::put('user/show-chat', [UserController::class, 'show_chat']);
Route::put('user/premium-status', [UserController::class, 'managePremiumStatus']);
Route::get('user/message-listing', [UserController::class, 'messageListing']);
Route::get('user/total-notification', [UserController::class, 'total_notification']);
Route::put('user/user-status', [UserController::class, 'user_status']);
Route::get('user/get-status', [UserController::class, 'getStatus']);
Route::put('user/notification-status', [UserController::class, 'notification_status']);
Route::get('user/total-friends', [UserController::class, 'total_friends']);
Route::get('user/total-messages', [UserController::class, 'total_requests']);
Route::get('user/total-likes', [UserController::class, 'total_likes']);
Route::get('user/total-chats', [UserController::class, 'total_messages']);
Route::put('user/chat-status', [UserController::class, 'chat_status']);
Route::post('user/meeting', [UserController::class, 'meeting']);
Route::put('user/meeting-status', [UserController::class, 'meeting_status']);







Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


