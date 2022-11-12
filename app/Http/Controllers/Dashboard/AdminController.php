<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function users()
    {
        $users = User::allUsers()->paginate(10);
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function staffs()
    {
        $staffs = User::allStaffs()->paginate(10);
        return view('dashboard.admin.staffs.index', compact('staffs'));
    }

    public function admins()
    {
        $admins = User::allAdmins()->paginate(10);
        return view('dashboard.admin.admins.index', compact('admins'));
    }

    public function preview()
    {
        return view('dashboard.admin.settings.page.home.preview');
    }
}
