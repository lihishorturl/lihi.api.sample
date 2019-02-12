<?php
// 取代 {your-api-key} ，改成來自您後台的 API key, 格式像是 7bKRlBs4qN25hM0rvgxtiXeU5kUTOrClLQTAFjf0
// 取代 https://google.com.tw ，改成您的長網址

// replace {your-api-key} to your api key, that format like 7bKRlBs4qN25hM0rvgxtiXeU5kUTOrClLQTAFjf0
// replace "https://google.com.tw" to your long url

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://app.lihi.io/api/v1/url",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "longUrl=".urlencode("https://google.com.tw"),
  CURLOPT_HTTPHEADER => array(
    "Authorization: x-api-key:{your-api-key}",
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