<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    public function dealItems()
    {
        return $this->hasMany(DealItem::class, 'deal_id', 'id');
    }
}
