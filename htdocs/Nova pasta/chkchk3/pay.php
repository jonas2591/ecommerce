<?php
$ch = curl_init();
set_time_limit(0);


$url = "https://www.saic.edu/forms/secure/donate/donation.php?mode=submit";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_REFERER,'https://www.saic.edu/forms/secure/donate/donation.php?mode=submit');
curl_setopt($ch, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows NT 10.0; WOW64; rv:49.0) Gecko/20100101 Firefox/49.0");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
curl_setopt($ch, CURLOPT_LOW_SPEED_LIMIT, 0);
curl_setopt($ch, CURLOPT_VERBOSE,1);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIESESSION,true);
curl_setopt($ch, CURLOPT_COOKIEJAR,getcwd().'/cookies.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE,getcwd().'/cookies.txt');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,'title=Mr.&firstName=Fabio&middleInitial=d&lastName=lima&titleSpouse=Mr.&firstNameSpouse=dabe&middleInitialSpouse=a&lastNameSpouse=dbast&lastNameAtGraduation=&classYear=&parentOfStudentName=&otherRelationshipDesc=&addressType=home&addr1=2323+corinth+ave&addr2=&city=los+angeles&zip1=V1C&zip2=2cV&country=US&state=CA&phoneHome1=310&phoneHome2=943&phoneHome3=5299&email=bobisl%40live.com&emailSignUp=1&othamt=1&amount=10&employerName=&toAnnualFund=1&toOtherDesc=&giftCode=&GiftForFirstNameMemory=&GiftForLastNameMemory=&firstNameMemory=Fabio&middleInitialMemory=sr&lastNameMemory=lima&addr1Memory=2323+corinth+ave&addr2Memory=&cityMemory=los+angeles&countryMemory=US&stateMemory=CA&zip1Memory=V1C&zip2Memory=2cV&GiftForFirstNameHonor=&GiftForLastNameHonor=&firstNameHonor=Fabio&middleInitialHonor=sr&lastNameHonor=lima&addr1Honor=2323+corinth+ave&addr2Honor=&cityHonor=los+angeles&countryHonor=US&stateHonor=CA&zip1Honor=V1C&zip2Honor=2cV');

$resultado = curl_exec($ch);
echo $resultado;

?>