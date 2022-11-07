<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageSettingRequest;
use App\Models\PageSetting;
use App\Services\ListService;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        $users = ListService::allUsersPaginated();
        return view('dashboard.admin.users.index', compact('users'));
    }

    public function staffs()
    {
        $staffs = ListService::allStaffsPaginated();
        return view('dashboard.admin.staffs.index', compact('staffs'));
    }

    public function admins()
    {
        $admins = ListService::allAdminsPaginated();
        return view('dashboard.admin.admins.index', compact('admins'));
    }

    public function preview()
    {
        return view('dashboard.admin.settings.page.home.preview');
    }

    public function hero()
    {
        $page = ListService::homePage();
        return view('dashboard.admin.settings.page.home.hero', compact('page'));
    }

    public function updateHero(PageSetting $pageSetting, PageSettingRequest $request)
    {
        dd($pageSetting, $request->all());
    }
}
