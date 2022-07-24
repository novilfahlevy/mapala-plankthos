<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserAction;
use Illuminate\Http\Request;

class UserActionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $actions = UserAction::orderByDesc('created_at')->paginate(10);
        return view('backend.pages.user-action', compact('actions'));
    }
}
