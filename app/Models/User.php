<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\FriendRequest;



class User extends Authenticatable implements MustVerifyEmail
{

    use  HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'fname',
        'lname',
        'email',
        'email_verified_at',
        'remember_token',
        'is_verified',
        'bio',
        'relationship_status',
        'dob',
        'pronoun',
        'password',
        'lat',
        'long',
        'is_premium',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

public function notifications()
{
    return $this->hasMany(Notification::class);
}


}
