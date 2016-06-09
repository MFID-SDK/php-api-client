<?php

namespace MFID\service;

/**
 * Class Client
 * @package MFID\service
 *
 * @property ApiService $api
 */
class Client
{
    protected $api;

    public function __construct($parent)
    {
        $this->api = $parent;
    }

    public function list_()
    {
        $api = $this->api;

        $data = $api->call('service/client.list', [
            'token' => $api->token,
        ]);

        return $data;
    }

    public function get($client_id)
    {
        $api = $this->api;

        $data = $api->call('service/client.get', [
            'token'     => $api->token,
            'client_id' => $client_id,
        ]);

        return $data;
    }

    public function add($name, $title, $description)
    {
        $api = $this->api;

        $data = $api->call('service/client.add', [
            'token'       => $api->token,
            'name'        => $name,
            'title'       => $title,
            'description' => $description,
        ]);

        return $data;
    }

    public function update($client_id, $name, $title, $description)
    {
        $api = $this->api;

        $data = $api->call('service/client.update', [
            'token'       => $api->token,
            'client_id'   => $client_id,
            'name'        => $name,
            'title'       => $title,
            'description' => $description,
        ]);

        return $data;
    }

    public function delete($client_id)
    {
        $api = $this->api;

        $data = $api->call('service/client.delete', [
            'token'     => $api->token,
            'client_id' => $client_id,
        ]);

        return $data;
    }
}
