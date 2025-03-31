<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barrack extends Model
{
    protected $table = 'barracks';

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'barracks_companies', 'barracks_fk', 'company_fk');
    }

    public function soldiers()
    {
        return $this->hasMany(Soldier::class, 'barracks_fk');
    }
}
