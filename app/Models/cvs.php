<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class cvs extends Authenticatable
{
    //
    protected $fillable = ["name", "email", "password", "keyprogramming", "profile", "education", "URLlinks"]; // allows to assign multiple values at once
    public $timestamps = false; // no timestamps are in use so it is disabled
    protected $table = 'cvs'; // table named



    protected $hidden = [
        'password',
    ]; // prevents serialisation of hashed passwords
    
}
