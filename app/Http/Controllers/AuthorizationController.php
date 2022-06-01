<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class AuthorizationController extends Controller
{
    public function authorization()
    {
        $menus = Menu::get();
        $title = 'авторизация';

        return view('authorization',
            [
                'menus' => $menus,
                'title' => $title
            ]);
    }
}
