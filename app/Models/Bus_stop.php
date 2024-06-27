<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus_stop extends Model
{
    use HasFactory;

   public function bus_information()
    {
        return $this->belongsTo(Bus_information::class);
    }
}

