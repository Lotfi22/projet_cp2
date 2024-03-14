<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    public static function supprimer($id_categorie)
    {


        return DB::delete("delete from categories where id = \"$id_categorie\" ");

        

        // code...
    }

    use HasFactory;
}
