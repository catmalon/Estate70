<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Landlord extends Model
{
    use HasFactory;
    protected $table = 'landlords';
    protected $fillable = ["name", "phone", "email"];

    public function rents()
    {
        return $this->hasMany(Rent::class, 'rent_id');
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
