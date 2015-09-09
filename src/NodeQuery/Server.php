<?php


namespace NodeQuery;


class Server
{
    private $baseUrl = "https://nodequery.com/api/servers/";

    private $key, $id;

    public function __construct($key,$id){
        $this->key = $key;
        $this->id =$id;
    }

    public function serverAry(){
        $url = $this->baseUrl . $this->id . "?api_key=" . $this->key;
        $resp = Request::get($url);
        return json_decode($resp,true);
    }
}