<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use App\Models\Gallery;
use App\Models\Information;
use App\Models\LeaderHistory;
use App\Models\Review;
use App\Trait\Information as TraitInformation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use TraitInformation;

    public function index()
    {
        $information = $this->getAllInformations();
        $leaders = LeaderHistory::all();
        $galleries = Gallery::all();
        $reviews = Review::all();
        $activities = Activity::query();
        return view('frontend.pages.index', compact('information', 'leaders', 'galleries', 'reviews', 'activities'));
    }
}
