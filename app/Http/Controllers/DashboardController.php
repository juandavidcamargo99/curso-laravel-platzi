<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // dd($request->query('title', 'valor default'));
        return view('dashboard', ['title' => 'hello dashboard']);
    }
}
