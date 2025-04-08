<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $fillable = [
        'customer_id',
        'total_amount', 
        'status',
        'delivery_address',
        'notes',
    ];

    public function customer()
    {
        return $this->belongsTo(Order::class, 'customer_id');
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }
}
