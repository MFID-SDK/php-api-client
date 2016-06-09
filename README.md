# MFID SDK for PHP 5.3+

A PHP library to access MFID API.

Requirements:
  * PHP 5.3+.
  * PHP [cURL extension](http://php.net/manual/en/curl.installation.php).

[SDK API docs.](http://docs.mfid.ru/)

## How to use

Require autoload

```php
    require_once '/path/to/lib/MFID/autoload.php';
```

Get instance using configuration

```php
    $api = Api::getInstance([
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
    ]);
```

Call methods

```php
    $api->group->method($params);
```

More information in examples