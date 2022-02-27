<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productcase1;
use DB;

class Productcase1Controller extends Controller
{
    public function fetch()
    {
        // count all db records 
        // both summation of two types should be equal to db records count
    	    $total_products = Productcase1::count();
            // select type, count # each status according to this type
            $counts = DB::table("productcase1s")
                                    ->select(
                                            "type", 
                                            DB::raw("count(type) as total"),
                                            DB::raw("count(IF(status = 0, 1, NULL)) as new_status"),
                                            DB::raw("count(IF(admin_status = 0, 1, NULL)) as suspended_status"),
                                            DB::raw("count(IF(admin_status = 1, 1, NULL)) as active_status")
                                    )->groupBy("type")->get();

        return response()->json([
            'total_products' => $total_products,
            'data'           => $counts,
        ]);
    }
}
