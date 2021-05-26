<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ["rent_id", "file_path"];

    public function rents()
    {
        return $this->belongsTo(Rent::class);
    }
}
