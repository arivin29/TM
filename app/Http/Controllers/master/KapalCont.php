<?php

namespace App\Http\Controllers\master;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\Kapal as kapal;
class KapalCont extends Controller
{
    public function getIndex(Request $request)
    {
        $data = kapal::ambil($request);
        if(count($data) > 0)
        {
          return $data;
        }
        return ['data'=>"0"];
    }
}
