<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender_id', 'receiver_id', 'sender_name', 'location_name', 'date', 'time', 'status',
    ];
    
     protected $table = 'meetings';
     
     public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
