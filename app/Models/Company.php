<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function soldiers()
    {
        return $this->hasMany(Soldier::class, 'company_fk');
    }

    public function barracks()
    {
        return $this->belongsToMany(Barrack::class, 'barracks_companies', 'company_fk', 'barracks_fk');
    }
}
