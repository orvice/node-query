<?php

namespace NodeQuery;

class Client{

    private $key;

    private $serverListUrl = "https://nodequery.com/api/servers?api_key=";

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function serverList(){
        $url = $this->serverListUrl.$this->key;
    }

}