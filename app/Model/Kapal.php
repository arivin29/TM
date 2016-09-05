<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use DB;
use App\Quotation;

class Kapal extends Model
{
    protected $table = 't_kapal';
    protected $primaryKey = 'id_kapal';
    public $timestamps = false;

    protected static function ambil($filter=null)
    {
        $sql=" Select *
                from t_kapal a
                where a.status_izin > 0
        ";
        return DB::select($sql);
    }


}
