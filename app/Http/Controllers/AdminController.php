<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class AdminController extends Controller
{
    public function menu()
    {
        $menus = Menu::get();
        $title = 'admin';

        return view('admin.admin',
            [
                'title' => $title,
                'menus' => $menus,
            ]);
    }
}
