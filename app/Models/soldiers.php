<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    protected $table = 'soldiers';

    public function armyCorp()
    {
        return $this->belongsTo(ArmyCorp::class, 'army_corp_fk');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_fk');
    }

    public function barracks()
    {
        return $this->belongsTo(Barrack::class, 'barracks_fk');
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'services_soldiers', 'soldier_fk', 'service_fk');
    }
}
