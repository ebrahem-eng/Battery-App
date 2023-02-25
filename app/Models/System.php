<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class System extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'number_battery',
        'number_inverters',
        'watt_battery',
        'watt_inverters',
        'Number_hours_for_charge',
        'price_number',
        'price_write',
        'details',
    ];
}
