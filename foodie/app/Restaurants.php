<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    public function owners()
    {
        return $this->belongsTo(Owners::class);
    }

    public function foods()
    {
        return $this->hasMany(Foods::class);
    }
}
