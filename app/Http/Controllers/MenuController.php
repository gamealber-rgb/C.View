<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;

class MenuController extends Controller
{
    public function index()
    {
        $menuItems = MenuItem::query()
            ->available()
            ->orderBy('sort_order')
            ->get()
            ->groupBy('category');

        return view('menu.index', compact('menuItems'));
    }
}
