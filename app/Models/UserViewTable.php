<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserViewTable extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path',
        'fname',
        'lname',
        'number',
        'dob',
        'interest',
        'relationship',
        'age',
        'location',
        'distance',
        'my_age',
        'pronouns',
        'Status',
    ];
}
