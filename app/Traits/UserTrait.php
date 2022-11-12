<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;

trait UserTrait
{
    public function scopeAllUsers($query)
    {
        return $query->where('role', 'user');
    }

    public function scopeAllStaffs($query)
    {
        return $query->where('role', 'staff');
    }

    public function scopeAllAdmins($query)
    {
        return $query->where('role', 'admin')->where('id', '!=', Auth::id());
    }
}


