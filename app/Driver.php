<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $fillable = ['plate_no', 'vehicle_no', 'vehicle_model', 'vehicle_color', 'drivers_licence',];
}
