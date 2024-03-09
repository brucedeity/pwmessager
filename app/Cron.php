<?php

namespace App;

use App\PWApi\PWApi;

class Cron
{
    public static function execute(string $method)
    {
        $messages = self::getMessages($method);

        return self::announce($messages);
    }

    private static function getMessages(string $key)
    {
        $messages = require __DIR__.'/../messages.php';

        return $messages[$key] ?? [];
    }

    private static function announce(array $messages)
    {
        $pwapi = new PWApi;
        
        foreach ($messages as $message) {
            $pwapi->worldChat(0, $message, 9);
        }
    }
}