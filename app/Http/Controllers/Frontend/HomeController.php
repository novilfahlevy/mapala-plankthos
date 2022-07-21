<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Trait\Setting as TraitSetting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use TraitSetting;

    public function index()
    {
        $setting = $this->getAllSettings();
        return view('frontend.index', compact('setting'));
    }
}
