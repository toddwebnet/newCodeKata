<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'Customer';
    protected $primaryKey = 'Id';

    public function getCustomerTypesAttribute()
    {
        return CustomerDemographic::whereIn('CustomerTypeId',
            CustomerCustomerDemo::where('CustomerId', $this->Id)->pluck('CustomerTypeId')
        )->get();
    }

}