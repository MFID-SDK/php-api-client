<?php

namespace MFID\service;

/**
 * Class Service
 * @package MFID\service
 *
 * @property ApiService $api
 */
class Service
{
    protected $api;

    public function __construct($parent)
    {
        $this->api = $parent;
    }

    public function list_()
    {
        $api = $this->api;

        $data = $api->call('service/service.list', [
            'token' => $api->token,
        ]);

        return $data;
    }

    public function get($service_id)
    {
        $api = $this->api;

        $data = $api->call('service/service.get', [
            'token'      => $api->token,
            'service_id' => $service_id,
        ]);

        return $data;
    }

    public function add($name, $title, $description)
    {
        $api = $this->api;

        $data = $api->call('service/service.add', [
            'token'       => $api->token,
            'name'        => $name,
            'title'       => $title,
            'description' => $description,
        ]);

        return $data;
    }

    public function update($service_id, $name, $title, $description)
    {
        $api = $this->api;

        $data = $api->call('service/service.update', [
            'token'       => $api->token,
            'service_id'  => $service_id,
            'name'        => $name,
            'title'       => $title,
            'description' => $description,
        ]);

        return $data;
    }

    public function delete($service_id)
    {
        $api = $this->api;

        $data = $api->call('service/service.delete', [
            'token'      => $api->token,
            'service_id' => $service_id,
        ]);

        return $data;
    }
}
