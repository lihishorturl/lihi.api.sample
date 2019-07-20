<?php
/**
* 這是批次量產大量短網址的範例
**/

// 取代 {your-api-key} ，改成來自您後台的 API key, 格式像是 7bKRlBs4qN25hM0rvgxtiXeU5kUTOrClLQTAFjf0
// 取代 https://google.com.tw ，改成您的長網址

// replace {your-api-key} to your api key, that format like 7bKRlBs4qN25hM0rvgxtiXeU5kUTOrClLQTAFjf0
// replace "https://google.com.tw" to your long url

	$req = [ 
		'name' => 't-'. time(),
		'domain' => '{your-custom-domain}'
	];

	$urls = [];

	// 這是目標網址，測試用產 10 組
	// slug 是短網址結尾
	for($i = 0; $i < 10; $i++ ) {
		$urls[] = [ "url" => "https://google.com.tw" , "slug" => random_int(10000, 99999) ];
	}

	$req['longUrls'] = $urls;

	$postFields = json_encode($req);

	post($postFields);


function post($postFields) {

	echo 'start';

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://app.lihi.io/api/v1/batchUrls",
	  CURLOPT_RETURNTRANSFER => false,
	  CURLOPT_ENCODING => "",
	  CURLOPT_TIMEOUT => 60,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "POST",
	  CURLOPT_POSTFIELDS => $postFields,
	  CURLOPT_HTTPHEADER => array(
	    "Authorization: x-api-key:{your-api-key}",
	    "Content-Type: application/json",
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
}

