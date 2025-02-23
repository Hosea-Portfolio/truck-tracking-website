<?php

namespace App\Models;

use App\Models\Route;
use App\Models\TruckDes;
use App\Models\TruckLoad;
use App\Models\TruckEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Truck extends Model
{
    use HasFactory;

    protected $table = 'truck';
    protected $guarded = ['id'];

    public function TruckLoad()
    {
        return $this->hasOne(TruckLoad::class);
    }

    public function TruckDes()
    {
        return $this->hasOne(TruckDes::class);
    }

    public function TruckEvents()
    {
        return $this->hasMany(TruckEvent::class, 'truck_id', 'id');
    }

    public function Routes()
    {
        return $this->hasMany(Route::class, 'truck_id', 'id');
    }
}
