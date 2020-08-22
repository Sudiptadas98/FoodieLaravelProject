<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $primaryKey = 'oid';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ordersdetails()
    {
        return $this->hasMany(OrdersDetails::class);
    }
}
