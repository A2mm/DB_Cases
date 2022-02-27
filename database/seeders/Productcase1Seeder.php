<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Productcase1;

class Productcase1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productcase1::truncate();
	        for ($i = 0; $i < 10; $i++) { 
	        	if ($i % 2 == 0) {
	        		$type = 'normal';
	        	}else{
	        		$type= 'digital';
	        	}
	        	Productcase1::create([
	        		'name'          => 'Product # '. ($i+1),
			    	'type'          => $type,
			        'status'        => array_rand([0, 1]),
			        'admin_status'  => array_rand([0, 1]),
	        	]);
	        }
    }
}
