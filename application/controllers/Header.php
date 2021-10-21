<?php
function get_web_page ( $url )
{
    $option = [
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Accept: application/json'
            ]
        ];
        $ch = curl_init($url);
        curl_setopt_array($ch, $option);
        $content = curl_exec ($ch);
        curl_close ($ch);
}
$url = 'http://localhost/api/customers/';
$data1 = get_web_page($url);
var_dump($data1);
?>