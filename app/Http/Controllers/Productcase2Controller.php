<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productcase2;
use DB;

class Productcase2Controller extends Controller
{
    public function fetch()
    {
        $counts = Productcase2::select('id', 'available_online', 'check_related')->get();
        foreach ($counts as $key => $value) {
            if ($value->available_online == null) {
                $value->makeHidden('available_online');
            }else{
                $value->makeHidden('check_related');
            }
        }
    	return response()->json($counts); 
    }
}