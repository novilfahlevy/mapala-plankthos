<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $visitors = Visitor::orderByDesc('created_at')->paginate(10);
        return view('backend.pages.dashboard', compact('visitors'));
    }
}
