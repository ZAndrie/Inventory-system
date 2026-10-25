<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Sales extends Model
{

    use HasUuids;

    protected $fillable =[
        'customer_id',
        'item_id',
        'price',
        'discount',
        'qunatity',
        'sales_summary_id'
    ];

    public function salesSummary(){
        return $this->belongsTo(SalesSummary::class, 'sales_summary_id');
    }

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

     public function items(){
        return $this->belongsTo(Employee::class,'customer_id');
    }

}
