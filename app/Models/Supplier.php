<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'Supplier';
    protected $primaryKey = 'Id';

    public function products()
    {
        return $this->hasMany(Product::class, 'SupplierId', 'Id');
    }
}