<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerCustomerDemo extends Model
{
    protected $table = 'CustomerCustomerDemo';

    public function find($customerId, $customerTypeId, $columns = ['*'])
    {
        return $this->where([
            'CustomerId' => $customerId,
            'CustomerTypeId' => $customerTypeId,
        ])->first($columns);

    }

    public function getKeyName()
    {
        // for sqlite
        return "CustomerId || '_' ||  CustomerTypeId";
    }

    protected function getKeyForSaveQuery()
    {
        return isset($this->original['CustomerId'])
            ? $this->original['CustomerId'] . '_' . $this->original['CustomerTypeId']
            : $this->attributes['CustomerId'] . '_' . $this->attributes['CustomerTypeId'];
    }
}