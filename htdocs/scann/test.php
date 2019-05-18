<?php
error_reporting(0);
set_time_limit(0);
function multiRequest($data, $options = array()) {

    // array of curl handles
    $curly = array();
    // data to be returned
    $result = array();

    // multi handle
    $mh = curl_multi_init();

    // loop through $data and create curl handles
    // then add them to the multi-handle
    foreach ($data as $id => $d) {

        $curly[$id] = curl_init();

        $url = (is_array($d) && !empty($d['url'])) ? $d['url'] : $d;
        $result[$id]['url'] = $url;
        curl_setopt($curly[$id], CURLOPT_URL, $url);
        curl_setopt($curly[$id], CURLOPT_HEADER, 0);
        curl_setopt($curly[$id], CURLOPT_TIMEOUT, 15);
        curl_setopt($curly[$id], CURLOPT_HTTPHEADER, array('User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:66.0) Gecko/20100101 Firefox/66.0'));
        curl_setopt($curly[$id], CURLOPT_RETURNTRANSFER, 1);

        // post?
        if (is_array($d)) {
            if (!empty($d['post'])) {
                curl_setopt($curly[$id], CURLOPT_POST, 1);
                curl_setopt($curly[$id], CURLOPT_POSTFIELDS, $d['post']);
            }
        }

        // extra options?
        if (!empty($options)) {
            curl_setopt_array($curly[$id], $options);
        }

        curl_multi_add_handle($mh, $curly[$id]);
    }

    // execute the handles
    $running = null;
    do {
        curl_multi_exec($mh, $running);
    } while ($running > 0);


    // get content and remove handles
    foreach ($curly as $id => $c) {
        $result[$id]['body'] = curl_multi_getcontent($c);
        curl_multi_remove_handle($mh, $c);
    }
    // all done
    curl_multi_close($mh);

    return $result;
}

echo "========================================" . PHP_EOL;
echo "Scanner de links" . PHP_EOL;
echo "By: Matheus Ferreira" . PHP_EOL;
echo "========================================" . PHP_EOL;
echo "INSIRA A PALAVRA/HTML CHAVE QUE TU DESEJE VERIFICAR:", PHP_EOL;
$handle = fopen("php://stdin", "r");
$keyword = trim(fgets($handle));

echo "CARREGUE UM file.txt CONTENDO OS LINKS", PHP_EOL;
$handle2 = fopen("php://stdin", "r");
$file = trim(fgets($handle2));

$lista = file_get_contents($file);
$data = explode(PHP_EOL, $lista);

echo "DIVIDIR EM QUANTAS PARTES", PHP_EOL;
$handle3 = fopen("php://stdin", "r");
$chunk = trim(fgets($handle3));

$data = array_chunk($data, $chunk);
for ($i2 = 0; $i2 < count($data); $i2++) {
    $r2 = multiRequest($data[$i2]);
    echo "========================================" . PHP_EOL;
    foreach ($r2 as $rr) {
        $url = $rr['url'];
        $body = $rr['body'];

        if (strpos($body, $keyword) !== false) {
            $resposta = "YES";
            $fp = fopen('success.txt', 'a+');
            fwrite($fp, $url . PHP_EOL);
        } else {
            $resposta = "NO";
        }

        echo 'URL      => ' . $url . PHP_EOL;
        echo 'KEYWORD  => ' . $keyword . PHP_EOL;
        echo 'RESPONSE => ' . $resposta . PHP_EOL;
    }
    echo "========================================" . PHP_EOL;
    @ob_flush();
    @flush();
}
