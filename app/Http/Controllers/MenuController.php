<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        return view('pages.main.home',
            [
                'current_page' => 'home',
                'categories' => Category::all(),
                'menus' => Menu::all(),
                'javascript_file' => 'main/home.js'
            ]
        );
    }
}
