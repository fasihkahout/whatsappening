<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile_verifiction extends Model
{
    use HasFactory;
     protected $fillable = [        
        'user_id',
        'verification_status',
        'image_video',
        // Add more fields here
    ];
}
