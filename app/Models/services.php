<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    public function soldiers()
    {
        return $this->belongsToMany(Soldier::class, 'services_soldiers', 'service_fk', 'soldier_fk');
    }
}
