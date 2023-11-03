<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Chat extends Model
{
    use HasFactory;
     protected $fillable = [
        'show_chat',
        'message_status',
                          
    ];

    protected $table = 'chats';
}
