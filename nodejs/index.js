// 取代 {your-api-key} ，改成來自您後台的 API key, 格式像是 7bKRlBs4qN25hM0rvgxtiXeU5kUTOrClLQTAFjf0
// 取代 https://google.com.tw ，改成您的長網址

// replace {your-api-key} to your api key, that format like 7bKRlBs4qN25hM0rvgxtiXeU5kUTOrClLQTAFjf0
// replace "https://google.com.tw" to your long url

var request = require("request");

var options = { method: 'POST',
  url: 'https://app.lihi.io/api/v1/url',
  headers: 
   { 'cache-control': 'no-cache',
     Authorization: 'x-api-key:{your-api-key}',
     'Content-Type': 'application/x-www-form-urlencoded' },
  form: 
   { longUrl: 'https://google.com.tw',
     tags: 'office',
     undefined: undefined } };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});
