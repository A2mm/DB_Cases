<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productcase3;
use DB;
use App\Http\Resources\Productcase3ApiResource;

class Productcase3Controller extends Controller
{
   public function fetch()
    {
    	// fetch data required
    	$indexes = Productcase3::select('id', 'name', 'status', 'admin_status', 'owner_status')->get();
    	// pass it to collection
    	// status was handled earlier using accessors and mutators principle while getting its value 
    	$data    = Productcase3ApiResource::collection($indexes);
    	return response()->json($data);
    }
}
