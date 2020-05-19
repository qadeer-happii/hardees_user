<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DealItem extends Model
{
    public function menuItems()
    {
        return $this->hasOne('App\MenuItem', 'menu_item_id', 'id');
    }
}
