<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Presence extends Model
{
    
    use HasFactory ,SoftDeletes;

    public static function get_all_presences($id_seance)
    {
        $Presences =  DB::select(" select * from presences where id_seance = '$id_seance' ");

        return $Presences;
    }

    public function adherant()
    {
        return $this->belongsTo(Adherant::class);
    }

    public function seance()
    {
        return $this->belongsTo(Seance::class);
    }    

}

