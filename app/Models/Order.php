<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = ["landlord_id", "tenant_id", "rent_id", "state", "updated_at"];

    public function landlords()
    {
        return $this->belongsTo(Landlord::class, 'landlord_id');
    }
    public function tenants()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }
    public function rents()
    {
        return $this->belongsTo(Rent::class, 'rent_id');
    }
}
