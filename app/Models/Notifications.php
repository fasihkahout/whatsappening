<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FriendRequest;
use App\Models\MessageRequest;
use App\Models\Meeting;

class Notifications extends Model
{
     use HasFactory;
    protected $fillable = [
        'users_id',
        'message',
        'title',
        'status',
    ];
     protected $table = 'notification';
     
    public function friendRequest()
    {
        return $this->belongsTo(FriendRequest::class, 'friend_request_id');
    }
    
    public function messageRequest()
    {
        return $this->belongsTo(MessageRequest::class, 'message_request_id');
    }
    
    public function meeting()
    {
        return $this->belongsTo(MessageRequest::class, 'meeting_id');
    }

}
