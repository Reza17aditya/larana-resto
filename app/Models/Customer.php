<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email', 
        'phone',
        'address',
        'password',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }
}
