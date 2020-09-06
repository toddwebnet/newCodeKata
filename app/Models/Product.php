<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'Product';
    protected $primaryKey = 'Id';

    public function supplier()
    {
        return $this->hasOne(Supplier::class, 'Id', 'SupplierId');
    }

    public function category(){
        return $this->hasOne(Category::class, 'Id', 'CategoryId');
    }
}