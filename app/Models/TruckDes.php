<?php

namespace App\Models;

use App\Models\TruckEvent;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TruckDes extends Model
{
    use HasFactory;
    protected $table = 'truck_des';
    protected $guarded = ['id'];

    public function TruckEvent()
    {
        return $this->belongsTo(TruckEvent::class);
    }
}
