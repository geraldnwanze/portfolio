<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Services\ListService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        $users = ListService::allUsersPaginated();
        return view('dashboard.admin.users', compact('users'));
    }

    public function staffs()
    {
        $staffs = ListService::allStaffsPaginated();
        return view('dashboard.admin.staffs', compact('staffs'));
    }

    public function admins()
    {
        $admins = ListService::allAdminsPaginated();
        return view('dashboard.admin.admins', compact('admins'));
    }
}
