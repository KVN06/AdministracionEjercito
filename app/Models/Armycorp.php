<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArmyCorp extends Model
{
    protected $table = 'armycorps';

    public function soldiers()
    {
        return $this->hasMany(Soldier::class, 'army_corp_fk');
    }
}
