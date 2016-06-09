<?php

require_once '../lib/MFID/autoload.php';

echo "test mfid cache feature ...<br/>";

$config = [
    'auth' => [
        'login'    => 'sandbox',
        'password' => 'sandbox',
        'app_hash' => 'f38f68260a',
        'expires'  => 3600,
    ],
    'cache' => [
        'save' => function ($key, $value) {
            echo "save($key)<br/>";
            $m = new Memcache();
            $m->connect('localhost', 11211);
            $m->set($key, $value);
        },
        'load' => function ($key) {
            echo "load($key)<br/>";
            $m = new Memcache();
            $m->connect('localhost', 11211);
            return $m->get($key);
        }
    ],
    'url' => 'https://sandbox.mfid.ru/'
];

try {
    $api = MFID\Api::getInstance($config);
} catch (Exception $e) {
    echo "fail<br/>";
    die ('Exception :: ' . $e->getMessage());
}

if ($api instanceof MFID\Api) {
    echo "all right :)<br/>";
} else {
    echo "fail :(<br/>";
}