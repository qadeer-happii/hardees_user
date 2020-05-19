<?php

namespace app\Helpers;

use App\User;

class UserHelper
{
	public static function admins()
	{
		$clients = User::role('admin')->get();
		
		return $clients;
	}
	
	public static function subAdmins()
	{
		$clients = User::role('sub-admin')->get();
		
		return $clients;
	}
	
	public static function clients()
	{
		$clients = User::role('client')->get();
		
		return $clients;
	}
	
	public static function employees()
	{
		$clients = User::role('employee')->get();
		
		return $clients;
	}
}
