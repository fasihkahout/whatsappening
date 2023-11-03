<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserMessage extends Model
{
    use HasFactory;
    protected $table ='support_messages';
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'message',
    ];
}
