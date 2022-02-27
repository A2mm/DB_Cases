<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class ProductController extends Controller
{
    public function count_status()
    {
            $total_products = Product::count();
            $counts = DB::table("products")
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
