<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['discount', 'discount_rate', 'is_date_scheduled', 'date_start', 'date_end', 'is_time_scheduled', 'time_start', 'time_end', 
        'day_mon', 'day_tue', 'day_wed', 'day_thu', 'day_fri', 'day_sat', 'day_sun'];

}
