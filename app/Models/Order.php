<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'Order';
    protected $primaryKey = 'Id';

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'Id', 'OrderId');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'CustomerId', 'Id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'EmployeeId', 'Id');
    }
}