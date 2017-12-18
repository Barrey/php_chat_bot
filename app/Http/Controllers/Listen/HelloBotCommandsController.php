<?php

namespace App\Http\Controllers\Listen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloBotCommandsController extends Controller
{

    public function handleSayHello($bot)
        {
            $bot->reply("Hello, I'm Hello World bot!");
        }

    /**
     * Handle when user says "hello, I'm {name}"
     * @param $bot
     * @param $name
     */
    public function handleSayHelloWithName($bot, $name)
    {
        $bot->reply("Hello, $name. I'm Hello World bot");
    }
    
}
