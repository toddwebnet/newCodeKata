<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'Category';
    protected $primaryKey = 'Id';

    public function products()
    {
        return $this->hasMany(Product::class, 'CategoryId', 'Id');
    }

}