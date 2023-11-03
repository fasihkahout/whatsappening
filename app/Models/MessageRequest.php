<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageRequest extends Model
{
    use HasFactory;

    protected $fillable = [        
        'sender_id',
        'status',
        'receiver_id',
        // Add more fields here
    ];
    
  public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
