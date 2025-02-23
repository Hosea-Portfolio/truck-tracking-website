<?php

namespace App\Models;

use App\Models\Truck;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TruckEvent extends Model
{
    use HasFactory;
    protected $table = 'truck_event';
    protected $guarded = ['id'];

    public function Trucks()
    {
        return $this->belongsTo(Truck::class);
    }
}
