<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.main.index');
    }
    public function pageNotFound()
    {
        return view('pages.maintenance.404');
    }
    public function artist()
    {
        # code...
    }
}
