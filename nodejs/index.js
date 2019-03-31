/**
1. 到 lihi 短網址後台找 api key 金鑰 
2. 把下方的 7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX 取代成你的 api key 
3. 把下方的 https://google.com 取代成你的長網址
4. 終端機輸入指令: npm install
5. 終端機輸入指令: node index.js
*/

/**
1. Find your lihi api key in admin backend
2. Replace 7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX to your api key
3. Replace https://google.com to your long url
4. $ npm install
5. $ node index.js
*/

var request = require("request");

var options = { method: 'POST',
  url: 'https://app.lihi.io/api/v1/url',
  headers: 
   { 'cache-control': 'no-cache',
     Authorization: 'x-api-key:7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX',
     'Content-Type': 'application/x-www-form-urlencoded' },
  form: 
   { longUrl: 'https://google.com',
     tags: 'office',
     undefined: undefined } };

request(options, function (error, response, body) {
  if (error) throw new Error(error);

  console.log(body);
});
