<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'Region';
    protected $primaryKey = 'Id';

    public function territories()
    {
        return $this->hasMany(Territory::class, 'RegionId', 'Id');
    }

}