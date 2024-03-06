<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class Admin extends Model
{
    use HasFactory;

    protected $guard='admin';

    public static function add(Request $request)
    {

        

        // code...
    }
}
