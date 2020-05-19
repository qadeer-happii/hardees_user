<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    public function menuItems()
    {
        return $this->hasMany('App\MenuItem', 'menu_category_id', 'id');
    }
}
