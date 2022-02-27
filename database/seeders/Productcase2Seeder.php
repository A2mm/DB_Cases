<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Productcase2;

class Productcase2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productcase2::truncate();
	        for ($i = 0; $i < 10; $i++) { 
	        	if ($i % 2 == 0) {
	        		$available_online = NULL;
	        		$check_related = 'https://www.check-another-related.com';
	        	}else{
	        		$available_online = 'https://www.purchase-link-product #'.($i+1).'.com';
	        		$check_related    = $available_online;
	        	}
	        	Productcase2::create([
	        		'available_online'       => $available_online,
			    	'check_related'          => $check_related,
	        	]);
	        }
    }
}
