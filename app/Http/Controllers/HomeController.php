<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Home;
use Inertia\Inertia;
class HomeController extends Controller
{
    public function index()
    {
        // $role=Auth::user()->role;


        // if($role== '1')
        // {
        //     return Inertia::render('Admin/Dashboard');
        // }
        // else
        // {
        //     return Inertia::render('Dashboard');
        // }
        
    }
}
