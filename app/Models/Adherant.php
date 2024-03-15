<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adherant extends Model
{

    public static function supprimer($id_categorie)
    {

        return DB::delete("delete from adherants where id = \"$id_adherant\" ");

    }






    use HasFactory;
}
