<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class Contact extends Controller
{

    public function contactMe(Request $request)
    {
        $name = $request->input('name')?? 'Неизвестно';
        $phone = $request->input('phone');
        Telegram::sendMessage([
            'chat_id' => '344213557',
            'text' =>
"<b>Имя: </b> $name
<b>Телефон: </b> <a href='tel:+$phone'>$phone</a>",
            'parse_mode' => 'html'
        ]);
        return response(200);
    }
}
