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
$random = mt_rand(1,99999999);

        
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
//





 if(file_exists(getcwd().'/cookiess.txt')) {
        unlink(getcwd().'/cookiess.txt'); 
    
  }
   if(file_exists(getcwd().'/cookiess.txt')) {
        unlink(getcwd().'/cookiess.txt'); 
    


  }

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


 



      
   

 echo '<code><span style="text-shadow: 0 0 7px green; color: green;"> Found </span>  '.$numero.'| Info: '.$bandeira.' '.$banco.' '.$teste.' '.$level.'('.$pais.')</code></br> ';






  

}
?>