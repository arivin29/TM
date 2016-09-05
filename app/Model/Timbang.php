<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

use DB;
use App\Quotation;

class Timbang extends Model
{
    protected $table = 't_timbang';
    protected $primaryKey = 'id_timbang';
    public $timestamps = false;

    protected static function ambil($filter=null)
    {
        $sql=" Select *
                from t_timbang a
                where a.status_izin > 0
        ";
        return DB::select($sql);
    }


}
