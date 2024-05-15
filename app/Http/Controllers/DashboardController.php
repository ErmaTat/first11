<?php

namespace App\Http\Controllers;
use App\Models\{
    Tournament
};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index(Request $request)
    {
        $tournaments=Tournament::all();
        return view('backend.dashboard.admin');
    }
}
