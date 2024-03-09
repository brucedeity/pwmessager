<?php

namespace App;

class Config
{
    private static $config = [
        'local' => '127.0.0.1',
        'ports' => [
            'gamedbd' => 29400,
            'gdeliveryd' => 29100,
            'gprovider' => 29300,
            'client' => 29000,
        ],
        'game_version' => '101',
        'maxbuffer' => 65536,
        's_block' => false,
        's_readtype' => 3,
    ];

    public static function get(string $key, $default = null)
    {
        $keys = explode('.', $key);

        $value = array_reduce($keys, function ($config, $part) use ($default) {
            return is_array($config) && array_key_exists($part, $config) ? $config[$part] : $default;
        }, self::$config);

        return $value;
    }
}