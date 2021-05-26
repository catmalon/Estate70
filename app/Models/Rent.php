<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;
    protected $table = 'rents';
    protected $fillable = ["state", "size", "room", "type", "price","floor", "pet", "photo", "location_city", "location_detail", "landlord_id" ];

    public function images() 
    {
        return $this->hasMany(Image::class, 'rent_id');
    }
    public function equipments()
    {
        return $this->hasOne(Equipment::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
