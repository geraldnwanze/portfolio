<?php

namespace App\Http\Controllers;

use App\Traits\PageSettingTrait;
use Illuminate\Http\Request;

class PageController extends Controller
{
    use PageSettingTrait;

    public function home()
    {
        $hero = $this->getHeroSection();
        $features = $this->getFeaturesSection();
        $socials = $this->getSocials();

        return view('main.index', compact('hero', 'features', 'socials'));
    }
}
