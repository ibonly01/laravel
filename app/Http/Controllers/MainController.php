<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class MainController extends Controller
{
    public function home()
    {
    	$menus = Page::all();

    	return view('pages.home', compact('menus'));
    }

    public function content($slug)
    {
    	$menus = Page::all();
    	$content = Page::whereSlug($slug)->first();

    	return view('pages.pages', compact('menus', 'content'));
    }
}
