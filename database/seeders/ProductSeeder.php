<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();
	        for ($i = 0; $i < 10; $i++) { 
	        	if ($i % 2 == 0) {
	        		$type = 'normal';
	        	}else{
	        		$type= 'digital';
	        	}
	        	Product::create([
	        		'name'          => 'Product # '. ($i+1),
			    	'type'          => $type,
			        'status'        => array_rand([0, 1]),
			        'admin_status'  => array_rand([0, 1]),
	        	]);
	        }
    }
}
