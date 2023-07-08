<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        
        $pageTitle = 'Beranda';

        return view('welcome', compact('pageTitle'));
    }
    
    public function profile() {
        $pageTitle = 'Profil';

        return view('profile', compact('pageTitle'));
    }
}
