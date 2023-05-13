<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = "users";
    protected $guard = "user";

    public $timestamps = false;

    protected $fillable = [
        'name',
        'password',
        "course",
        "stdNo",
        "profile_image"
    ];
}
