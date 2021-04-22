<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        session()->flash('success', 'You have successfully added Dapo as a member of the Executives');
        return view('admin.index');
    }
}
