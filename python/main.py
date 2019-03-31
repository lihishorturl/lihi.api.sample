#1. Find your lihi api key in admin backend
#2. Replace 7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX to your api key
#3. Replace https://google.com to your long url

#1. 到 lihi 短網址後台找 api key 金鑰 
#2. 把下方的 7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX 取代成你的 api key 
#3. 把下方的 https://google.com 取代成你的長網址

import requests

url = "https://app.lihi.io/api/v1/url"

payload = "{\n\t\"longUrl\": \"https://google.com\"\n}"
headers = {
    'Authorization': "x-api-key:7bKRlQTAFjf0Bs4qN25hM0rvTOrCgxtiXeUXXXXX",
    'Content-Type': "application/json",
    'cache-control': "no-cache"
    }

response = requests.request("POST", url, data=payload, headers=headers)

print(response.text)