<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'Employee';
    protected $primaryKey = 'Id';

    public function subordinates()
    {
        return $this->hasMany(Employee::class, 'ReportsTo', 'Id');
    }

    public function supervisor()
    {
        return $this->belongsTo(Employee::class, 'ReportsTo', 'Id');
    }

    public function getTerritoryAttribute()
    {
        $territoryId = EmployeeTerritory::where('EmployeeId', $this->id)->first();
        if ($territoryId === null) {
            return null;
        }
        return Territory::where('Id', $territoryId)->first();
    }
}