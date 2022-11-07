<?php

namespace App\Services;

use App\Models\PageSetting;
use App\Models\User;

class ListService 
{
    public static function allUsers()
    {
        return User::where('role', 'user')->get();
    }

    public static function allUsersPaginated($number = 10)
    {
        return User::where('role', 'user')->paginate($number);
    }

    public static function allStaffs()
    {
        return User::where('role', 'staff')->get();
    }

    public static function allStaffsPaginated($number = 10)
    {
        return User::where('role', 'staff')->paginate($number);
    }

    public static function allAdmins()
    {
        return User::where('role', 'admin')->get();
    }

    public static function allAdminsPaginated($number = 10)
    {
        return User::where('role', 'admin')->paginate($number);
    }

    public static function homePage()
    {
        return PageSetting::where('page', 'home')->firstOrFail();
    }
}

