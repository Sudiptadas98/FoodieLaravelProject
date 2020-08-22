<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersDetails extends Model
{
    public function orders()
    {
        return $this->belongsTo(Orders::class);
    }
}
