<?php

require_once "curl_super.php";
require_once "../lib/JSON.php";

$url = "xxxxxxxxxxxxxxxxxxxx";
$data = array('yan' => '1');
$json = new Services_JSON;

    $api = new Curlsuper($url);
    $api->setData($data);
    $api->getData();
    $jresult = $json->decode($api->result);
    print "$jresult->answer\n";
    print "$jresult->url"; 
