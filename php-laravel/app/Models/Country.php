<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'Country';

    public function users()
    {
        return $this->belongsToMany('App\Model\User', 'UserCountryMapping', 'countryId', 'userId');
    }
}
