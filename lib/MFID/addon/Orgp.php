<?php

namespace MFID\addon;

/**
 * Class Orgp
 * @package MFID\addon
 *
 * @property \MFID\Api $api
 */
class Orgp
{
    protected $api;

    public function __construct($parent)
    {
        $this->api = $parent;
    }

    public function checkCard($card)
    {
        $api = $this->api;

        $data = $api->call('addon/orgp.checkCard', [
            'token' => $api->token,
            'card'  => $card,
        ]);

        return $data;
    }

    public function paymentSend($order_id, $card, $amount)
    {
        $api = $this->api;

        $data = $api->call('addon/orgp.paymentSend', [
            'token'    => $api->token,
            'order_id' => $order_id,
            'card'     => $card,
            'amount'   => $amount,
        ]);

        return $data;
    }
}
