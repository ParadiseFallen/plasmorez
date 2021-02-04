<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Contact extends Controller
{

    public function contactMe(Request $request)
    {
        //TODO: Пост в телеграмм бота
        return response(200);
    }
}
