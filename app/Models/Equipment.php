<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Equipment extends Model
{
    use HasFactory;
    protected $table = 'equipments';
    protected $fillable = ["rent_id", "air", "lundry", "refrigerator", "gas", "bed", "closet", "sofa", "balcony", "elevator","pet", "TV", "tvCable", "wifi", "notRooftop"];

    public function rents()
    {
        return $this->belongsTo(Rent::class);
    }
}
