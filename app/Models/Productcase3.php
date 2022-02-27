<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productcase3 extends Model
{
   use HasFactory, SoftDeletes;

    public $table = 'productcase3s';

    protected $fillable = [
    	'name',
    	'type',
        'status',
        'admin_status',
        'owner_status',
    ];

    public function getStatusAttribute($value)
    {
    	if ($value == 0 && $this->admin_status == 0 &&  $this->owner_status == 0) {
    		$status_value = 'new';
    	}elseif ($value == 1 && $this->admin_status == 1 &&  $this->owner_status == 1) {
    		$status_value = 'active';
    	}elseif ($value == 2) {
    		$status_value = 'rejected';
    	}elseif ($value == 1 && $this->admin_status == 0) {
    		$status_value = 'suspended';
    	}elseif ($this->owner_status == 0) {
    		$status_value = 'not_avtive';
    	}else{
    		$status_value = 'NAN';
    	}
    	return $status_value;
    }
}
