<?php
function curl($url, $post = false, $header = false, $proxy = false) {
    $ch = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_FOLLOWLOCATION => 1,
        CURLOPT_TIMEOUT => 20,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0
    ));
    if ($header) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    }
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    if ($proxy) {
        curl_setopt($ch, CURLOPT_PROXY, "");
    }
    $exec = curl_exec($ch);
    if (curl_error($ch)) {
        return curl_error($ch);
    } else {
        return $exec;
    }
}
