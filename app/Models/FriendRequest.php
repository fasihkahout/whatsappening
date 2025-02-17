<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class FriendRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'status'                  
    ];

    protected $table = 'friend_requests';
    
    public function sender()
{
    return $this->belongsTo(User::class, 'sender_id');
}

 public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
    
     public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
    
}
