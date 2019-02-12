# lihi
sample code
這是一個商家提出的需求
如果有其他語言的需求歡迎告訴我們

終端機指令版本
1. 把 {your-api-key} 取代成你的lihi 後台 api 金鑰
2. 把 {your-long-url} 取代成你的長網址
3. 把下方代碼貼到終端機
```
curl -X POST \
  https://app.lihi.io/api/v1/url \
  -H 'Authorization: x-api-key:{your-api-key}' \
  -H 'Content-Type: application/x-www-form-urlencoded' \
  -H 'cache-control: no-cache' \
  -d 'longUrl={your-long-url}'
```

Updated at 2019-02-12