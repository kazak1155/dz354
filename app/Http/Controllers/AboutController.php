<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class AboutController extends Controller
{
    public function about()
    {
        $menus = Menu::get();
        $title = 'О нас';

        return view('/about',
            [
                'title' => $title,
                'menus' => $menus,
            ]);
    }
}
