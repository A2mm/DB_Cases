<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Productcase2 extends Model
{
    use HasFactory, SoftDeletes;

    public $table = 'productcase2s';

    protected $fillable = [
    	'available_online',
    	'check_related',
    ];
}
