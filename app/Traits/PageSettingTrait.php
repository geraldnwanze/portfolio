<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\DB;

trait PageSettingTrait
{
    private $tables = [
        'hero' => 'heros',
        'feature' => 'features',
        'social' => 'socials'
    ];

    public function getHeroSection()
    {
        return DB::table($this->tables['hero'])->get()->first();
    }

    public function getFeaturesSection()
    {
        return DB::table($this->tables['feature'])->get();
    }

    public function getPortfolioSection()
    {
        //
    }

    public function getResumeSection()
    {
        //
    }

    public function getSocials()
    {
        return DB::table($this->tables['social'])->get();
    }
}


