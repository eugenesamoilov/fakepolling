<?php

for($i=0;$i<10000;$i++)
{


$ch = curl_init('https://ykt.ru');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// get headers too with this line
curl_setopt($ch, CURLOPT_HEADER, 1);
$result = curl_exec($ch);
// get cookie
// multi-cookie variant contributed by @Combuster in comments
preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $result, $matches);
$cookies = array();
foreach($matches[1] as $item) {
   parse_str($item, $cookie);
   $cookies = array_merge($cookies, $cookie);
}
// echo var_dump($cookies);
$one = $cookies["__ddg1"];
$two = $cookies["_csrf"];
$thh = substr("".$two."", 95, 32);

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://poll.ykt.ru//vote?charset=UTF-8');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "enc=%E2%84%A2&poll-id=923&variant=37256");
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');

$headers = array();
$headers[] = 'Connection: keep-alive';
$headers[] = 'Accept: */*';
$headers[] = 'Origin: https://news.ykt.ru';
$headers[] = 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36';
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8';
$headers[] = 'Sec-Fetch-Site: same-site';
$headers[] = 'Sec-Fetch-Mode: cors';
$headers[] = 'Referer: https://news.ykt.ru/article/94752?utm_source=whatsapp&utm_medium=94752&utm_campaign=user_share';
$headers[] = 'Accept-Encoding: gzip, deflate, br';
$headers[] = 'Accept-Language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7';
$headers[] = 'Cookie: __ddg1='.$one.'; YktRatio3='.$thh.'; _ym_uid=1576091060243444123; _ym_d=1576091060; _ga=GA1.2.1236823256.1576091061; _gid=GA1.2.1203009695.1576091061; _gat_gtag_UA_76420413_9=1; _gat_gtag_UA_76420413_3=1; _ym_isad=2; _ym_visorc_8751535=w';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
   echo 'Error:' . curl_error($ch);
}
curl_close($ch);

print $thh."\n";
// 3u879BbZVjdkXV1gWbyJdF7hSkYE4Agb
// R5mAjIBALXx3SRhvu3FF3oyqifx

// $qwe="0d633df01f6e9545912c6848b3cea313e6e22bb3f700e317306f7d6c3db9b170a:2:{i:0;s:5:_csrf;i:1;s:32:3u879BbZVjdkXV1gWbyJdF7hSkYE4Agb;}";
}


//curl -d "enc=%E2%84%A2&poll-id=923&variant=37256" -H "Content-Type: text/html; utf-8=" -X POST https://poll.ykt.ru --cookie=SESSIONID=9A0B8EFB51CB06CC21F6CBF33E2B340E"

// curl 'https://poll.ykt.ru//vote?charset=UTF-8' -H 'Connection: keep-alive' -H 'Accept: */*' -H 'Origin: https://news.ykt.ru' -H 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/78.0.3904.108 Safari/537.36' -H 'Content-Type: application/x-www-form-urlencoded; charset=UTF-8' -H 'Sec-Fetch-Site: same-site' -H 'Sec-Fetch-Mode: cors' -H 'Referer: https://news.ykt.ru/article/94752?utm_source=whatsapp&utm_medium=94752&utm_campaign=user_share' -H 'Accept-Encoding: gzip, deflate, br' -H 'Accept-Language: ru-RU,ru;q=0.9,en-US;q=0.8,en;q=0.7'
//  -H 'Cookie: __ddg1=ED2785F715D33EB3E59CB7392CBB69311F11A9F6; _ga=GA1.2.401150811.1576069162; _gid=GA1.2.540519188.1576069162; _gat_gtag_UA_76420413_9=1; _gat_gtag_UA_76420413_3=1; YktRatio3=0873a4adc37d4e9491568d57a37c7708; _ym_uid=1576069163733858775; _ym_d=1576069163; _ym_isad=2; _ym_visorc_8751535=w' --data 'enc=%E2%84%A2&poll-id=923&variant=37256' --compressed

?>