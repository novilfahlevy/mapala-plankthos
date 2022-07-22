<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Information;
use App\Trait\Information as TraitInformation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use TraitInformation;

    public function index()
    {
        $information = $this->getAllInformations();
        return view('frontend.index', compact('information'));
    }
}
