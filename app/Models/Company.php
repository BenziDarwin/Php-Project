<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = "companies";
    protected $guard = "company";

    public $timestamps = false;

    protected $fillable = [
        'companyName',
        'Address',
        "sector",
        "password",
    ];
}
