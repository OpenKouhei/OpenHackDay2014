<?php

require_once "curl_super.php";

$url  = "xxxxxxxxxxxxxxxx";
$data = array ("question" => "人類初の宇宙飛行士は",
               'value'    => "normal" 
                ); 

    while(1) {
        $api = new Curlsuper($url);
        $comment = fgets(STDIN);
        if($comment == "exit") {
            break;
        }
        $data['question'] = $comment;
        $api->setData($data);
        $api->getData();
        echo "$api->result";
    }
?>
