<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'orgname',
        'adviser',
        'college_id',
        'representative',
        'image',
        'vision',
        'mission'
    ];
}
