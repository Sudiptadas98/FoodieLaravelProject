<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owners extends Model
{
    public function restaurants()
    {
        return $this->hasMany(Restaurants::class);
    }
}
