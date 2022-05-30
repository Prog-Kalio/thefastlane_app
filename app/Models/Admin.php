<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable; 

//change Model in class to Authenticatable since I'm using Authenticatable
class Admin extends Authenticatable
{
    use HasFactory;

    protected $guard = 'admin';
}
