<?php

namespace MFID\service;

/**
 * Class Paycard
 * @package MFID\service
 *
 * @property ApiService $api
 */
class Paycard
{
    protected $api;

    public function __construct($parent)
    {
        $this->api = $parent;
    }

    public function get($paycard_id)
    {
        $api = $this->api;

        $data = $api->call('service/paycard.get', [
            'token'      => $api->token,
            'paycard_id' => $paycard_id,
        ]);

        return $data;
    }

    public function add($bank_id, $customer_id, $operator, $is_main, $pan_hash, $pan_mask, $pay_token)
    {
        $api = $this->api;

        $data = $api->call('service/paycard.add', [
            'token'       => $api->token,
            'bank_id'     => $bank_id,
            'customer_id' => $customer_id,
            'operator'    => $operator,
            'is_main'     => $is_main,
            'pan_hash'    => $pan_hash,
            'pan_mask'    => $pan_mask,
            'pay_token'   => $pay_token,
        ]);

        return $data;
    }

    public function delete($paycard_id)
    {
        $api = $this->api;

        $data = $api->call('service/paycard.delete', [
            'token'      => $api->token,
            'paycard_id' => $paycard_id,
        ]);

        return $data;
    }

    public function mainGet($customer_id)
    {
        $api = $this->api;

        $data = $api->call('service/paycard.mainGet', [
            'token'       => $api->token,
            'customer_id' => $customer_id,
        ]);

        return $data;
    }

    public function mainSet($customer_id, $paycard_id)
    {
        $api = $this->api;

        $data = $api->call('service/paycard.mainSet', [
            'token'       => $api->token,
            'customer_id' => $customer_id,
            'paycard_id'  => $paycard_id,
        ]);

        return $data;
    }
}
