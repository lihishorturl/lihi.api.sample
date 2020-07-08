<?php
/**
1. 到 lihi 短網址後台找 api key 金鑰 
2. 把下方的 7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX 取代成你的 api key 
3. 把下方的 https://google.com 取代成你的長網址
*/

/**
1. Find your lihi api key in admin backend
2. Replace 7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX to your api key
3. Replace https://google.com to your long url
*/
$curl = curl_init();

$params = [
  "longUrl"=>urlencode("https://google.com"),
  //"domain" => "yourdomain",
  //"slug" => "yourslug",
  //"tags" => "yourtags",
];

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://app.lihi.io/api/v1/url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => http_build_query( $params ),
  CURLOPT_HTTPHEADER => array(
    "Authorization: x-api-key:7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX",
    "Content-Type: application/x-www-form-urlencoded",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
