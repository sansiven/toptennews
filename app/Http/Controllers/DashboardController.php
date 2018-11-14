<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;

        
        $news = News::orderBy('id', 'desc')->paginate(5);
        return view('dashboard')->with('news', $news);
    }

    public function admin()
    {
        return view('admin_views/starter');
    }
}
