<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendLike extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'status',                  
    ];
    protected $table = 'friend_likes';
    
    public function notifications()
{
    return $this->hasMany(Notifications::class);
  }
}
