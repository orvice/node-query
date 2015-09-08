<?php

namespace NodeQuery;


class Request
{
    static public function get($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $resp = curl_exec($ch);
        curl_close($ch);
        return $resp;
    }
}