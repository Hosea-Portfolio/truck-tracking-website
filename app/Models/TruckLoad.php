<?php

namespace App\Models;

use App\Models\Truck;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TruckLoad extends Model
{
    use HasFactory;
    protected $table = 'truck_load';
    protected $guarded = ['id'];

    public function Truck()
    {
        return $this->belongsTo(Truck::class);
    }
}
