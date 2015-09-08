<?php

namespace NodeQuery;

class Client{

    private $key;

    private $serverListUrl = "https://nodequery.com/api/servers?api_key=";

    public function __construct($key)
    {
        $this->key = $key;
    }

    public function request($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $resp = curl_exec($ch);
        curl_close($ch);
        return $resp;
    }

    public function serverList()
    {
        $url = $this->serverListUrl.$this->key;
        $rt = $this->request($url);
        $srvAry = json_decode($rt,true);
        return $srvAry;
    }

    public function serverInfo($id){

    }

}