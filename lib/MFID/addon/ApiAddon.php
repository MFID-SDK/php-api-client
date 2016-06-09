<?php

namespace MFID\addon;

class ApiAddon
{
    public $orgp;

    public function __construct($api)
    {
        $this->orgp = new Orgp($api);
    }
}