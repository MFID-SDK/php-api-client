<?php

namespace MFID\service;

/**
 * Class Addon
 * @package MFID\service
 *
 * @property ApiService $api
 */
class Addon
{
    protected $api;

    public function __construct($parent)
    {
        $this->api = $parent;
    }

    public function list_()
    {
        $api = $this->api;

        $data = $api->call('service/addon.list', [
            'token' => $api->token,
        ]);

        return $data;
    }

    public function get($addon_id)
    {
        $api = $this->api;

        $data = $api->call('service/addon.get', [
            'token'    => $api->token,
            'addon_id' => $addon_id,
        ]);

        return $data;
    }

    public function add($name, $title, $description)
    {
        $api = $this->api;

        $data = $api->call('service/addon.add', [
            'token'       => $api->token,
            'name'        => $name,
            'title'       => $title,
            'description' => $description,
        ]);

        return $data;
    }

    public function update($addon_id, $name, $title, $description)
    {
        $api = $this->api;

        $data = $api->call('service/addon.update', [
            'token'       => $api->token,
            'addon_id'    => $addon_id,
            'name'        => $name,
            'title'       => $title,
            'description' => $description,
        ]);

        return $data;
    }

    public function delete($addon_id)
    {
        $api = $this->api;

        $data = $api->call('service/addon.delete', [
            'token'    => $api->token,
            'addon_id' => $addon_id,
        ]);

        return $data;
    }

    public function methodList($addon_id)
    {
        $api = $this->api;

        $data = $api->call('service/addon.methodList', [
            'token'    => $api->token,
            'addon_id' => $addon_id,
        ]);

        return $data;
    }

    public function methodGet($addon_id, $name)
    {
        $api = $this->api;

        $data = $api->call('service/addon.methodGet', [
            'token'    => $api->token,
            'addon_id' => $addon_id,
            'name'     => $name,
        ]);

        return $data;
    }

    public function methodAdd($addon_id, $name, $app_required, $access_required)
    {
        $api = $this->api;

        $data = $api->call('service/addon.methodAdd', [
            'token'           => $api->token,
            'addon_id'        => $addon_id,
            'name'            => $name,
            'app_required'    => $app_required,
            'access_required' => $access_required,
        ]);

        return $data;
    }

    public function methodUpdate($addon_id, $name, $app_required, $access_required)
    {
        $api = $this->api;

        $data = $api->call('service/addon.methodUpdate', [
            'token'           => $api->token,
            'addon_id'        => $addon_id,
            'name'            => $name,
            'app_required'    => $app_required,
            'access_required' => $access_required,
        ]);

        return $data;
    }

    public function methodDelete($addon_id, $name)
    {
        $api = $this->api;

        $data = $api->call('service/addon.methodDelete', [
            'token'    => $api->token,
            'addon_id' => $addon_id,
            'name'     => $name,
        ]);

        return $data;
    }
}
