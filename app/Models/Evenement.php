<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{

    public static function supprimer($id_evenement)
    {

        return DB::delete("delete from evenements where id = \"$id_evenement\" ");

    }

    use HasFactory;
    
}

