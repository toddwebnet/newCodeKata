<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Territory extends Model
{
    protected $table = 'Territory';
    protected $primaryKey = 'Id';

    public function getEmployeesAttribute()
    {
        return Employee::whereIn('Id',
            EmployeeTerritory::where('TerritoryId', $this->Id)->pluck('Id')
        )->get();
    }

    public function region()
    {
        return $this->belongsTo(Region::class, 'RegionId', 'Id');
    }
}