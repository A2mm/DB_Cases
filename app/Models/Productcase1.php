<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productcase1 extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'productcase1s';

    protected $fillable = [
    	'name',
    	'type',
        'status',
        'admin_status',
    ];
}
