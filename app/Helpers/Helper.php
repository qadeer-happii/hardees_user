<?php

use App\Deal;
use Illuminate\Support\Facades\Session;

class Helper
{

    public static function getUserCount()
    {
        return Deal::all();
    }
}
