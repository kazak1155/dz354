<?php

namespace App\Http\Controllers;

use App\Models\Menu;

class ContactsController extends Controller
{
    public function contacts()
    {
        $menus = Menu::get();
        $title = 'контакты';


        return view('contacts',
            [
                'menus' => $menus,
                'title' => $title,
            ]);
    }
}
