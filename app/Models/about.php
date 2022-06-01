<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    public function about()
    {
        $title = 'about';
        return view('about',
            [
                'title' => $title
            ]);
    }
}
