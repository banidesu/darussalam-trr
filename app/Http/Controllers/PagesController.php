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

    public function berita() {
        $pageTitle = 'Berita';

        return view('berita', compact('pageTitle'));
    }

    public function gallery() {
        $pageTitle = 'Gallery';

        return view('gallery', compact('pageTitle'));
    }
}
