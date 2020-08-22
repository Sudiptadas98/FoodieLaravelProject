<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{

    protected $primaryKey = 'fid';

    public function restaurans()
    {
        return $this->belongsTo(Restaurants::class);
    }
}
