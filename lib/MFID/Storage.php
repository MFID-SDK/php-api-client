<?php

namespace MFID;

/**
 * Class Storage
 * @package MFID
 *
 * @property Api $api
 */
class Storage
{
    protected $api;

    public function __construct($parent)
    {
        $this->api = $parent;
    }

    public function set($key, $value, $global = 0)
    {
        $api = $this->api;

        $data = $api->call('storage.set', [
            'token'  => $api->token,
            'key'    => $key,
            'value'  => $value,
            'global' => $global,
        ]);

        return $data;
    }

    public function get($keys, $global = 0)
    {
        $api = $this->api;

        $data = $api->call('storage.get', [
            'token'  => $api->token,
            'keys'   => is_array($keys) ? implode(',', $keys) : $keys,
            'global' => $global,
        ]);

        return $data;
    }

    public function getKeys($global = 0, $count = 100, $offset = 0)
    {
        $api = $this->api;

        $data = $api->call('storage.getKeys', [
            'token'  => $api->token,
            'global' => $global,
            'count'  => $count,
            'offset' => $offset,
        ]);

        return $data;
    }
}