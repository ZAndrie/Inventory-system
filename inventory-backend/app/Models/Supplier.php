<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Supplier extends Model
{
    use HasUuids;

    protected $fillable=[
        'name',
        'address',
        'contact_no',
        'email',
        'owner_name'
    ];

    public function stocks(){
        return $this-> hasMany(Stock::class,'supplier_id');
    }
}
