<?php

return [
    'auth' => [
        'login'    => 'sandbox',
        'password' => 'sandbox',
        'app_hash' => '513a6785e7',
        'expires'  => 3600,
    ],
    'url' => 'https://sandbox.mfid.ru/',
    /*'cache' => [
        'save' => function ($key, $value) {
            $m = new Memcache();
            $m->connect('localhost', 11211);
            $m->set($key, $value);
        },
        'load' => function ($key) {
            $m = new Memcache();
            $m->connect('localhost', 11211);
            return $m->get($key);
        }
    ],/**/
];

return [
    'auth' => [
        'login'    => 'developer',
        'password' => '123456',
        'app_hash' => '875d9a0672',
        'expires'  => 3600,
    ],
    'url' => 'http://api.dev.mfid.ru/',
];