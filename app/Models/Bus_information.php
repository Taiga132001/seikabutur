<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus_information extends Model
{
    use HasFactory;
    
    public function bus_stops()   
        {
            return $this->hasMany(Bus_stop::class);  
        }
}
