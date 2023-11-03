use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SoundCOntroller;
use App\Http\Controllers\Api\VideoController;
use App\Http\Controllers\Api\ReportController;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\AreaController;
use App\Http\Controllers\Api\ChallengController;
use App\Http\Controllers\Api\VideoCommentController;
use App\Http\Controllers\Api\FollowerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([  
    'prefix' => 'auth/',   
], function () {
    Route::post('/register',[AuthController::class,'register']);
    Route::post('/register1',[AuthController::class,'register1']);
    Route::post('/login',[AuthController::class,'login']);
     Route::post('forgetPassword',[AuthController::class,'forgotPassword']);
     Route::post('verify-otp-recovery-account',[AuthController::class,'verify_otp_recovery_account']);
     Route::post('reset-Password',[AuthController::class,'updatePassword']);
     Route::post('send-invetation',[AuthController::class,'send_invitation']);
   
     
    
     
    
    // Route::post('/password/reset',[AuthController::class,'reset']);
    Route::post('/login1',[AuthController::class,'login1']);
});
Route::middleware('auth:api')->group(function () {
Route::post('/logout', [AuthController::class, 'logout']);
//Route::get('get_user_video/{user_id}',[VideoController::class,'get_lognedInUser_video']);
Route::resource('sound', SoundCOntroller::class);


Route::resource('report', ReportController::class);
//Route::resource('city', CityController::class);
Route::resource('challeng', ChallengController::class);
Route::resource('video-comment', VideoCommentController::class);

Route::post('accept-challenge/{challeng_id}',[ChallengController::class,'AcceptChallange']);




//Route::get('city',[CityController::class,'index']);
Route::post('challenge-review/add/{challeng_id}',[ChallengController::class,'AddChallangeReview']);
});
Route::resource('city', CityController::class);
Route::resource('area', AreaController::class);
Route::resource('video', VideoController::class);
Route::post('store_user_video/{user_id}',[VideoController::class,'store_user_video']);
Route::get('get_user_video/{user_id}',[VideoController::class,'get_lognedInUser_video']);
Route::get('delete_user_video/{video_id}',[VideoController::class,'delete_user_video']);

 Route::post('follow-user', [FollowerController::class,'follow_user']);
 Route::get('total-followers-following/{user_id}', [FollowerController::class,'total_follow']);
 Route::get('total-followers-following-list/{user_id}', [FollowerController::class,'follower_list']);


