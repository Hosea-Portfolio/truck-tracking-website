<?php

namespace App\Models;

use App\Models\Truck;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Route extends Model
{
    use HasFactory;
    protected $table = 'routes';
    protected $guarded = ['id'];

    public function Trucks()
    {
        return $this->belongsTo(Truck::class);
    }
}
