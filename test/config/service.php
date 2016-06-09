<?php

return [
    'auth' => [
        'login'    => 'sandbox',
        'password' => 'sandbox',
        'app_hash' => 'f38f68260a',
        'expires'  => 3600,
    ],
    'url' => 'https://sandbox.mfid.ru/',
    'cache' => [
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
    ],
];