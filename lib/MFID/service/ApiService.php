<?php

namespace MFID\service;

class ApiService extends \MFID\Api
{
    public $addon;
    public $address;
    public $app;
    public $card;
    public $client;
    public $customer;
    public $emission;
    public $market;
    public $merchant;
    public $offer;
    public $paycard;
    public $service;
    public $transaction;

    public function __construct($config, $auth)
    {
        parent::__construct($config, $auth);

        $this->addon       = new Addon($this);
        $this->address     = new Address($this);
        $this->app         = new App($this);
        $this->card        = new Card($this);
        $this->client      = new Client($this);
        $this->customer    = new Customer($this);
        $this->emission    = new Emission($this);
        $this->market      = new Market($this);
        $this->merchant    = new Merchant($this);
        $this->offer       = new Offer($this);
        $this->paycard     = new Paycard($this);
        $this->service     = new Service($this);
        $this->transaction = new Transaction($this);
    }
}