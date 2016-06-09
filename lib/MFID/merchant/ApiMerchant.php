<?php

namespace MFID\merchant;


class ApiMerchant extends \MFID\Api
{
    public $merchant;
    public $card;
    public $customer;
    public $transaction;

    public function __construct($config, $auth)
    {
        parent::__construct($config, $auth);

        $this->merchant    = new Merchant($this);
        $this->card        = new Card($this);
        $this->customer    = new Customer($this);
        $this->transaction = null;
    }
}