<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Productcase3;

class Productcase3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Productcase3::truncate();
	        
	        	Productcase3::create([
	        		'name'          => 'Product # 1',
			    	'type'          => 'normal',
			        'status'        => 0,
			        'admin_status'  => 0,
			        'owner_status'  => 0,
	        	]);
	        	Productcase3::create([
	        		'name'          => 'Product # 2',
			    	'type'          => 'digital',
			        'status'        => 1,
			        'admin_status'  => 0,
			        'owner_status'  => 0,
	        	]);
	        	Productcase3::create([
	        		'name'          => 'Product # 3',
			    	'type'          => 'normal',
			        'status'        => 2,
			        'admin_status'  => 0,
			        'owner_status'  => 0,
	        	]);
	        	Productcase3::create([
	        		'name'          => 'Product # 4',
			    	'type'          => 'digital',
			        'status'        => 1,
			        'admin_status'  => 1,
			        'owner_status'  => 1,
	        	]);
	        	Productcase3::create([
	        		'name'          => 'Product # 5',
			    	'type'          => 'digital',
			        'status'        => 1,
			        'admin_status'  => 1,
			        'owner_status'  => 0,
	        	]);
    }
}
