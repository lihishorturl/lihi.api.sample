# lihi
sample code

終端機指令版本
1. 到 lihi 短網址後台找 api key 金鑰 
2. 把下方的 7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX 取代成你的 api key 
3. 把下方的 https://google.com 取代成你的長網址
4. 把下方代碼貼到終端機 press Enter
```
curl -X POST \
  https://app.lihi.io/api/v1/url \
  -H 'Authorization: x-api-key:7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX' \
  -H 'Content-Type: application/x-www-form-urlencoded' \
  -H 'cache-control: no-cache' \
  -d 'longUrl=https://google.com'
```

Updated at 2019-03-31