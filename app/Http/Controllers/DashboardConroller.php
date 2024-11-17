<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DashboardConroller extends Controller
{
    public function main()
    {
        return view('main');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
